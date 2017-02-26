<?php

/*
 * This file is part of the Silex Standard Edition package.
 *
 * (c) Andrey Nilov <nilov@glavweb.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Glavweb\MarkupFixture\Manager\MarkupFixtureManager;

/**
 * Class DefaultControllerProvider
 *
 * @author Andrey Nilov <nilov@glavweb.ru>
 */
class DefaultControllerProvider implements ControllerProviderInterface
{
    /**
     * @param Application $app
     * @return mixed
     */
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        /**
         * Index page
         */
        $controllers->get('/', function (Application $app) {
            /** @var MarkupFixtureManager $fixtureManager */
            $fixtureManager = $app['markup_fixture_manager'];

            return $app['twig']->render('pages/index.html.twig', [
                'videoItem'      => $fixtureManager->get('video_item')[0],
                'imageItem'      => $fixtureManager->get('image_item')[0],
                'products'       => $fixtureManager->get('product'),
                'imageGalleries' => $fixtureManager->get('image_gallery'),
                'videoGalleries' => $fixtureManager->get('video_gallery'),
            ]);
        })->bind('index');

        return $controllers;
    }
}