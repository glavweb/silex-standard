<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();
$app->prepare('edit');
$app->run();
