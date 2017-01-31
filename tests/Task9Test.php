<?php


class Task9Test extends PHPUnit_Framework_TestCase
{
    public function testTask9()
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

}