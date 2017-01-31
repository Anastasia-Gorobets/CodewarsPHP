<?php
namespace Source;

use Exception;

/*
Build Tower by the following given argument:
number of floors (integer and always greater than 0)
*/

class Task9
{

    public function tower_builder($n)
    {
        if ($n < 0) {
            throw new \Exception('Parametr n must be > 0');
        }
        $i = 1;
        $mas = [];
        while (true) {
            $mas[] = str_repeat('*', $i);
            $i += 2;
            if (count($mas) >= $n) break;
        }
        $l = strlen($mas[count($mas) - 1]);
        $mas2 = [];
        for ($i = 0; $i < count($mas); $i++) {
            $diff = $l - strlen($mas[$i]);
            $start = str_repeat(' ', $diff / 2);
            $end = $start;
            $mas2[] = $start . $mas[$i] . $end;
        }
        return $mas2;
    }

}