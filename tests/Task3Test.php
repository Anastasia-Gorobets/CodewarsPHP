<?php

require __DIR__ . '/../src/Task3.php';
class Task3Test extends PHPUnit_Framework_TestCase
{
    public function testTask3(){
        $this->assertEquals('2-7-5-3',dashatize(2753));
    }

}