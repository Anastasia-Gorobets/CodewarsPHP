<?php


class ExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
    }
}