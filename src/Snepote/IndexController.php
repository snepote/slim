<?php
/**
 * Class IndexController
 *
 * @author Sebastian Nepote <sebastian.nepote@tirendo.com>
 */

namespace Snepote;


class IndexController extends BaseController
{
    public function index()
    {
        $this->app->render('index.twig', array(
                'foo' => 'bar',
            ));
    }

} 