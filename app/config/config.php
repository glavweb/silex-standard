<?php
/**
 * @var Application $app
 * @var array $parameters
 */

// Monolog`s options
$app['monolog.logfile'] = __DIR__ . '/../../var/logs/' . $app->getEnvironment() . '.log';

// Twig`s options
$app['twig.path']    =  __DIR__ . '/../Resources/views';
$app['twig.options'] = [];

// Application`s options
$app['kernel.root_dir']      = realpath(__DIR__ . '/..');
$app['kernel.web_dir']       = realpath($app['kernel.root_dir'] . '/../web');
$app['request.host_url']     = $parameters['host_url'];
$app['fixture.objects_file'] = $app['kernel.root_dir']. '/Resources/fixtures/objects.php';
