<?php
/**
 * Application
 *
 * PHP version 5.4.*
 *
 * @author Sebastian Nepote <snepote@gmail.com>
 */

require __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$app = new \Slim\Slim(
    array(
    'templates.path' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views',
    'view' => new \Slim\Views\Twig())
);

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'cache'
);

$app->get('/', 'Snepote\Controller\Index:index');
$app->get('/hello', 'Snepote\Controller\Index:hello');
$app->get(
    '/hello/:name', function ($name) use ($app) {
        (new Snepote\Controller\Index())->hello($name);
    }
);

$app->run();
