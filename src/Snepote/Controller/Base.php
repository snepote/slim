<?php
/**
 * Class BaseController
 *
 * PHP version ~5.4
 *
 * @author Sebastian Nepote <snepote@gmail.com>
 */

namespace Snepote\Controller;

/**
 * Class Base
 *
 * @package Snepote
 * @author  Sebastian Nepote <snepote@gmail.com>
 */
class Base
{
    /**
     * @var \Slim\Slim
     */
    protected $app;

    /**
     * Base controller constructor
     */
    public function __construct()
    {
        global $app;
        $this->app = $app;
    }
} 