<?php

class Task11Test extends PHPUnit_Framework_TestCase
{
    public function testTask11()
    {
        $task11 = new Source\Task11();
        $this->assertEquals(2.5, $task11->median([1, 2, 3, 4]));
        $this->assertEquals(3, $task11->median([3, 4, 1, 2, 5]));
        $this->assertEquals(41, $task11->median([10, 29, 23, 94, 76, 96, 5, 85, 4, 33, 47, 41, 87]));
    }
}