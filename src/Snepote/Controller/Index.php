<?php
/**
 * Class Index
 *
 * PHP version ~5.4
 *
 * @author Sebastian Nepote <sebastian.nepote@tirendo.com>
 */

namespace Snepote\Controller;

use Snepote;
/**
 * Class Index
 *
 * @package Snepote
 * @author  Sebastian Nepote <sebastian.nepote@tirendo.com>
 */
class Index extends Base
{
    /**
     * Index action
     *
     * @return null
     */
    public function index()
    {
        $this->app->render(
            'index.twig', array(
                'foo' => 'bar',
            )
        );
    }

    /**
     * Says hello
     *
     * @param null $name prints value
     *
     * @return null
     */
    public function hello($name = null)
    {
        $cualquiera = new Snepote\Cualquiera();

        $this->app->render(
            'hello.twig', array(
                'name' => $cualquiera->saySomething($name),
            )
        );
    }
}
