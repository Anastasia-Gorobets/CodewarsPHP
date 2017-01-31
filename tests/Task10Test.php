<?php

class Task10Test extends PHPUnit_Framework_TestCase
{
    public function testTask10(){
        $task10=new Source\Task10();
        $this->assertEquals("TTTT", $task10->DNA_strand("AAAA"));
        $this->assertEquals("AAAA", $task10->DNA_strand("TTTT"));
        $this->assertEquals("TAACG",$task10->DNA_strand("ATTGC"));
        $this->assertEquals("ATTGC",$task10->DNA_strand("TAACG"));
        $this->assertEquals("CATA", $task10->DNA_strand("GTAT"));
        $this->assertEquals("GTAT", $task10->DNA_strand("CATA"));
    }
}