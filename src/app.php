<?php
/**
 * Application
 *
 * PHP version 5.4.*
 *
 * @author Sebastian Nepote <snepote@gmail.com>
 *
 */

include __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$app = new \Slim\Slim(array(
    'templates.path' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views',
    'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'cache'
);

$app->get('/', function() use ($app) {
        (new \Snepote\IndexController($app))->index();
    });
//$app->get('/', new Snepote\IndexController($app));

/*
$app->get('/', function() use ($app) {
    $app->render('index.twig', array(
        'foo' => 'bar',
    ));
});
*/

$app->get('/hello', function() use ($app) {
    $app->render('hello.twig', array());
});

$app->get('/hello/:name', function($name) use ($app) {
    $app->render('hello.twig', array(
        'name' => $name,
    ));
});

$app->run();
