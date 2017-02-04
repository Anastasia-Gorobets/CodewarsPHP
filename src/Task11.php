<?php
namespace Source;

/*
https://www.codewars.com/kata/582609930626631a9600003e/train/php
The mean (or average) is the most popular measure of central tendency; however it does not behave very well when the data is skewed (i.e. wages distribution). In such cases, it's better to use the median.

Your task for this kata is to find the median of an array consisting of n elements.

You can assume that all inputs are arrays of numbers in integer format. For the empty array your code should return NaN (false in JavaScript/NULL in PHP).
*/
class Task11
{
    public function median($a)
    {
        if (empty($a)) return null;
        sort($a);
        $c = count($a);
        if (count($a) % 2 == 0) {
            return ($a[$c / 2] + $a[$c / 2 - 1]) / 2;
        }
        return $a[round(count($a) / 2) - 1];
    }
}