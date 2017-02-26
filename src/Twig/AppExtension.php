<?php

/*
 * This file is part of the Silex Standard Edition package.
 *
 * (c) Andrey Nilov <nilov@glavweb.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Class AppExtension
 *
 * @author Andrey Nilov <nilov@glavweb.ru>
 */
class AppExtension extends \Twig_Extension
{
    /**
     * @var \Application
     */
    private $app;

    /**
     * TwigExtension constructor.
     *
     * @param \Application $app
     */
    public function __construct(\Application $app)
    {
        $this->app = $app;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return [];
    }
}