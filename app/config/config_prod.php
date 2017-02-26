<?php

// include the base configuration
require __DIR__ . '/config.php';

$app['twig.options'] = ['cache' => __DIR__ . '/../../var/cache/twig'];
