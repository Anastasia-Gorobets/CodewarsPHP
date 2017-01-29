<?php

class Task1Test extends PHPUnit_Framework_TestCase
{
    public function testTask1()
    {
        $task1 = new Source\Task1();
        $this->assertEquals([1, 1, 1, 3, 5, 9], $task1->fib([1, 1, 1], 6));
    }
}