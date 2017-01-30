<?php


namespace Source;

/*
https://www.codewars.com/kata/55da6c52a94744b379000036/train/php
Given a random string consisting of numbers, letters, symbols, you need to sum up the numbers in the string.
*/
class Task6
{
    function sum_from_string($str)
    {
        $numbers = preg_replace("/\D/", ' ', $str);
        $arr = explode(" ", $numbers);
        $numbers=array_filter($arr);
        $sum = array_sum($numbers);
        return $sum;
    }

}