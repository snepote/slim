<?php
/**
 * Class CualquieraTest
 *
 * @author Sebastian Nepote <sebastian.nepote@tirendo.com>
 */

class CualquieraTest extends PHPUnit_Framework_TestCase
{
    private $cualquiera;

    /**
     * Test set up
     *
     * @return null
     */
    public function setUp()
    {
        $this->cualquiera = new Snepote\Cualquiera();
    }

    public function testSaySomething()
    {
        $this->assertEquals('what', $this->cualquiera->saySomething('what'));

    }
}
