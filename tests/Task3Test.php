<?php

class Task3Test extends PHPUnit_Framework_TestCase
{
    public function testTask3()
    {
        $task3 = new Source\Task3();
        $this->assertEquals('2-7-5-3', $task3->dashatize(2753));
    }

}