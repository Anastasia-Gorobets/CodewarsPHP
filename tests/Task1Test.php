<?php

require __DIR__ . '/../src/Task1.php';
class Task1Test extends PHPUnit_Framework_TestCase
{
    public function testTask1(){
        $this->assertEquals([1,1,1,3,5,9],fib([1,1,1],6));
    }
}