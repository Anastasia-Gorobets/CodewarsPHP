<?php

class Task2Test extends PHPUnit_Framework_TestCase
{
    public function testTask2(){
        $list=[1,3,5,9,11];
        $this->assertEquals(7,\Source\findMissing($list));
        $list=[1,5,7];
        $this->assertEquals(3,\Source\findMissing($list));
    }

}