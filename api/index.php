<?php
ob_start();
require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

//$app->config('debug', true);

$request = \Slim\Slim::getInstance()->request();


define("ADMIN", "QAEngTestAdmin");
/*
Preliminary data, for testing.
*/
$app->get('/ping', function() use ($app, $request) {
    echo 'ok';
    $app->contentType('application/json');
});

$app->run();