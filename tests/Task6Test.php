<?php


class Task6Test extends  PHPUnit_Framework_TestCase
{

    public function testSingleDigit() {
        $task6=new Source\Task6();
        $this->assertEquals(2, $task6->sum_from_string('e=mc^2'));
    }

    public function testMultipleDigits() {
        $task6=new Source\Task6();
        $this->assertEquals(4, $task6->sum_from_string('1+1=2'));
    }

    public function testSentence() {
        $task6=new Source\Task6();
        $this->assertEquals(2021, $task6->sum_from_string('In 2015, I want to know how much does iPhone 6+ cost?'));
    }

}