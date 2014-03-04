<?php
/**
 *
 * @author Sebastian Nepote <sebastian.nepote@tirendo.com>
 */

require __DIR__ . '/../vendor/autoload.php';
function customAutoload($className)
{
    if (class_exists($className) || interface_exists($className)) {
        return true;
    }

    if ((version_compare(PHP_VERSION, '5.4.0') >= 0) && trait_exists($className)) {
        return true;
    }

    $filename = __DIR__ . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $className) . '.php';
    if (is_readable($filename)) {
        require($filename);
        return true;
    } else {
        return false;
    }
}
spl_autoload_register('customAutoload');

$app = new Silex\Application();

// definitions
date_default_timezone_set("Europe/Berlin");

// Register extensions
$app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views',
    ));

// Debugging is on by default - you may wish to change this on a per-host basis
$app['debug'] = true;

// Add layout
$app->before(function () use ($app) {
        $app['twig']->addGlobal('layout', $app['twig']->loadTemplate('layout.twig'));
    });

// Register error handlers
$app->error(
    function (\Exception $ex) use ($app) {
    /*        
        if ($ex instanceof Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
            return $app['twig']->render('error.twig', array('code' => 404));
        }
    */
        $code = ($ex instanceof HttpException) ? $ex->getStatusCode() : 500;
        return $app['twig']->render('error.twig', array('code' => $code));
    }
);

// Routes
$app->get('/', 'Controller\IndexController::indexAction');

$app->get('/hello/{name}', function ($name) use ($app) {
        return 'Hello '.$app->escape($name);
    });


$app->run();
