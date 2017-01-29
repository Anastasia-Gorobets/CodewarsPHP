<?php

class Task2Test extends PHPUnit_Framework_TestCase
{
    public function testTask2(){
        $task2=new Source\Task2();
        $list=[1,3,5,9,11];
        $this->assertEquals(7,$task2->findMissing($list));
        $list=[1,5,7];
        $this->assertEquals(3,$task2->findMissing($list));
    }

}