<?php
/**
 * Class BaseController
 *
 * PHP version ~5.4
 *
 * @author Sebastian Nepote <sebastian.nepote@tirendo.com>
 */

namespace Snepote;

/**
 * Class BaseController
 *
 * @package Snepote
 * @author  Sebastian Nepote <sebastian.nepote@tirendo.com>
 */
class BaseController
{
    /**
     * @var \Slim\Slim
     */
    protected $app;

    /**
     * Base controller constructor
     *
     * @param \Slim\Slim $app Application instance
     */
    public function __construct(\Slim\Slim $app)
    {
        $this->app = $app;
    }
} 