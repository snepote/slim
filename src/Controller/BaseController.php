<?php
/**
 * Class BaseController
 *
 * @author Sebastian Nepote <sebastian.nepote@tirendo.com>
 */

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class BaseController
{
    protected $request;
    protected $app;

    /**
     * @param Request           $request
     * @param Silex\Application $app
     */
    /*
    public function __construct(Request $request, Silex\Application $app)
    {
        $this->request = $request;
        $this->app = $app;
    }
    */

} 