<?php

class Task7Test extends  PHPUnit_Framework_TestCase
{
    public function testTask7(){
        $task7=new Source\Task7();
        $this->assertEquals([0,1,2,3],$task7->generate_integers(3));
    }

}