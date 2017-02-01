<?php

class Task10Test extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @param $from
     * @param $to
     */
    public function test($from, $to)
    {
        $task10 = new Source\Task10();
        $this->assertSame($from, $task10->DNA_strand($to));
        $this->assertSame($to, $task10->DNA_strand($from));

        $this->assertSame($from, $task10->DNA_strand_with_map($to));
        $this->assertSame($to, $task10->DNA_strand_with_map($from));
    }

    public function dataProvider()
    {
        return [
            ['TTTT', 'AAAA'],
            ['TAACG', 'ATTGC'],
            ['CATA', 'GTAT'],
        ];
    }
}