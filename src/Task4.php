<?php
namespace Source;
class Task4
{
    function mean(array $a)
    {
        $digits = 0;
        $symbols = "";
        foreach ($a as $el) {
            if (preg_match('/^\+?\d+$/', $el)) {
                $digits += $el;
            } else $symbols .= $el;
        }
        return $res = [$digits / 10, $symbols];
    }
}