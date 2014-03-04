<?php
/**
 * Class IndexController
 *
 * @author Sebastian Nepote <sebastian.nepote@tirendo.com>
 */

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends BaseController
{
    protected $app;
    protected $request;

    public function indexAction(Request $request, Application $app)
    {
        return $app['twig']->render('index.twig');
    }

} 