<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();
$app->prepare('prod');
$app->run();
