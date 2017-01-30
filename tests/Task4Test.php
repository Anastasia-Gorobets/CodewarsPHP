<?php
/*
 * https://www.codewars.com/kata/56f7493f5d7c12d1690000b6/train/php
 * You will be given an array which will include both integers and characters.

Return an array of length 2 with a[0] representing the mean of the ten integers as a floating point number. There will always be 10 integers and 10 characters. Create a single string with the characters and return it as a[1] while maintaining the original order.
 */

class Task4Test extends PHPUnit_Framework_TestCase
{
    public  function testTask4(){
        $task4=new Source\Task4();
        $lst =  ["u", "6", "d", "1", "i", "w", "6", "s", "t", "4", "a", "6", "g", "1", "2", "w", "8", "o", "2", "0"];
        $this->assertEquals([3.6, "udiwstagwo"], $task4->mean($lst));
        $lst = ["0", "c", "7", "x", "6", "2", "3", "5", "w", "7", "0", "y", "v", "u", "h", "i", "n", "u", "0", "0"];
        $this->assertEquals([3.0, "cxwyvuhinu"], $task4->mean($lst));
        $lst = ["0", "u", "a", "y", "0", "a", "9", "q", "3", "v", "g", "7", "6", "4", "y", "d", "8", "6", "0", "d"];
        $this->assertEquals([4.3, "uayaqvgydd"], $task4->mean($lst));
        $lst = ["s", "n", "9", "l", "0", "m", "i", "z", "9", "7", "y", "4", "z", "3", "3", "k", "4", "1", "0", "k"];
        $this->assertEquals([4.0, "snlmizyzkk"], $task4->mean($lst));
        $lst = ["5", "v", "u", "k", "8", "4", "9", "b", "9", "g", "5", "z", "3", "f", "6", "u", "i", "6", "6", "t"];
        $this->assertEquals([6.1, "vukbgzfuit"],$task4->mean($lst));
        $lst = ["1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "a", "a", "d", "d", "g", "q", "u", "v", "y", "y"];
        $this->assertEquals([0.9, "aaddgquvyy"], $task4->mean($lst));
        $lst = ["1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "a", "a", "d", "d", "g", "q", "u", "v", "y", "y"];
        $this->assertEquals([1.0, "aaddgquvyy"], $task4->mean($lst));
    }

}