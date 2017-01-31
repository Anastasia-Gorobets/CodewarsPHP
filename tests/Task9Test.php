<?php

class Task9Test extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $task9 = new Source\Task9();
        $res = $task9->tower_builder(1);
        $this->assertEquals(['*'], $res);

        $this->assertEquals([
            '  *  ',
            ' *** ',
            '*****'
        ], $task9->tower_builder(3));
        $this->assertEquals([
            '     *     ',
            '    ***    ',
            '   *****   ',
            '  *******  ',
            ' ********* ',
            '***********'
        ], $task9->tower_builder(6));
    }

    public function testException()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Parameter n must be > 0');
        $task9 = new Source\Task9();
        $task9->tower_builder(0);
    }
}