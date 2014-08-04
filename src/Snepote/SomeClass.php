<?php
/**
 * Class SomeClass
 *
 * @author Sebastian Nepote <snepote@gmail.com>
 */

namespace Snepote;

/**
 * Class SomeClass
 *
 * @package Snepote
 */
class SomeClass
{
    /**
     * Says something
     *
     * @param $what message to say
     *
     * @return mixed
     */
    public function saySomething($what)
    {
        return $what;
    }

    /**
     *
     * @throws \Exception
     */
    public function throwException()
    {
        throw new \Exception('Exception message', 0);
    }
}
