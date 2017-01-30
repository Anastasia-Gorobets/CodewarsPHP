<?php


class Task5Test extends PHPUnit_Framework_TestCase
{

    public function testNullOrEmpty() {
        $task5=new Source\Task5();
        $this->assertSame(null, $task5->timeCorrect(null));
        $this->assertSame("", $task5->timeCorrect(""));
    }

    public function testInvalidFormat() {
        $task5=new Source\Task5();
        $this->assertSame(null, $task5->timeCorrect("001122"));
        $this->assertSame(null, $task5->timeCorrect("00;11;22"));
        $this->assertSame(null, $task5->timeCorrect("0a:1c:22"));
    }

    public function testCorrection() {
        $task5=new Source\Task5();
        $this->assertSame("09:10:01", $task5->timeCorrect("09:10:01"));
        $this->assertSame("12:10:10", $task5->timeCorrect("11:70:10"));
        $this->assertSame("20:39:09", $task5->timeCorrect("19:99:09"));
        $this->assertSame("20:40:39", $task5->timeCorrect("19:99:99"));
        $this->assertSame("00:01:01", $task5->timeCorrect("24:01:01"));
        $this->assertSame("00:01:01", $task5->timeCorrect("52:01:01"));
    }


}