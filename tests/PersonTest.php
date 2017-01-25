<?php

require 'Person.php';

class PersonTest extends PHPUnit_Framework_TestCase
{
    public function testGetName(){
        $person=new Person("John");
        $this->assertEquals("John",$person->getName());
    }
}

