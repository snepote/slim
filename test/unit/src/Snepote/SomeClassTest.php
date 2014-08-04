<?php
/**
 * Class SomeClassTest
 *
 * @author Sebastian Nepote <snepote@gmail.com>
 */
class SomeClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var instance of Snepote\SomeClass()
     */
    private $someClass;

    /**
     * Test set up
     *
     * @return null
     */
    public function setUp()
    {
        $this->someClass = new Snepote\SomeClass();
    }

    /**
     * @covers Snepote\SomeClass::saySomething
     */
    public function testSaySomething()
    {
        $this->assertEquals('what', $this->someClass->saySomething('what'));
    }

    /**
     * @expectedException     \Exception
     * @expectedExceptionCode 0
     * @expectedExceptionMessage Exception message
     */
    public function testThrowException()
    {
        $this->someClass->throwException();
    }
}
