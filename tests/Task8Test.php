<?php

/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 31.01.2017
 * Time: 17:37
 */
class Task8Test extends PHPUnit_Framework_TestCase
{
    public function testTask8(){
        $task8=new Source\Task8();
        $this->assertEquals("A nuf elttil egnellahc", $task8->reverser("A fun little challenge"));
    }

}