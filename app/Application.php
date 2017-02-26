<?php

/*
 * This file is part of the Silex Standard Edition package.
 *
 * (c) Andrey Nilov <nilov@glavweb.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\MonologServiceProvider;
use Glavweb\SilexMarkupFixture\Provider\MarkupFixtureManagerServiceProvider;

/**
 * Class Application
 *
 * @author Andrey Nilov <nilov@glavweb.ru>
 */
class Application extends Silex\Application
{
    use Silex\Application\UrlGeneratorTrait;

    /**
     * @var string
     */
    private $environment;

    /**
     * Application constructor.
     *
     * @param string      $env
     * @throws Exception
     */
    public function prepare($env)
    {
        $this->environment = $env;

        $this->configure();
        $this->serviceProviders();
        $this->twigExtension();
        $this->controllers();
    }

    /**
     * @throws Exception
     */
    private function configure()
    {
        $parametersPath = __DIR__  . '/config/parameters.php';
        if (!is_file($parametersPath)) {
            throw new \Exception(sprintf('Parameters file "%s" not found.', $parametersPath));
        }

        $configPath = __DIR__ . '/config/config_' . $this->environment . '.php';
        if (!is_file($configPath)) {
            throw new \Exception(sprintf('Config file "%s" not found.', $configPath));
        }

        $app = $this;
        $parameters = require_once $parametersPath;

        require_once $configPath;
    }

    /**
     * Register service providers
     */
    public function serviceProviders()
    {
        $fixtureObjects = include $this['fixture.objects_file'];

        $this->register(new TwigServiceProvider(), [
            'twig.path'    => $this['twig.path'],
            'twig.options' => $this['twig.options'],
        ]);

        $this->register(new AssetServiceProvider());
        $this->register(new MonologServiceProvider(), [
            'monolog.logfile' => $this['monolog.logfile']
        ]);
        $this->register(new MarkupFixtureManagerServiceProvider($this['request.host_url'], $fixtureObjects));
    }

    /**
     * Twig extension
     */
    private function twigExtension()
    {
        $this->extend('twig', function(Twig_Environment $twig, Application $app) {
            // Add global variables
            $twig->addGlobal('menu', $app['markup_fixture_manager']->get('menu'));
            $twig->addGlobal('app', [
                'environment' => $this->environment
            ]);

            // Add extensions
            $twig->addExtension(new \Twig\AppExtension($this));

            return $twig;
        });
    }

    /**
     * Controllers
     */
    private function controllers()
    {
        $this->mount('/', new \Controller\DefaultControllerProvider());
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
}
