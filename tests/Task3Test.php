<?php

class Task3Test extends PHPUnit_Framework_TestCase
{
    public function testTask3(){
        $this->assertEquals('2-7-5-3',\Source\dashatize(2753));
    }

}