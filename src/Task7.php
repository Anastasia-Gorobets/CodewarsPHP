<?php
namespace Source;

/*
https://www.codewars.com/kata/5841f4fb673ea2a2ae000111/train/php
Write a function generateIntegers/generate_integers that accepts a single argument n/$n and generates an array containing the integers from 0 to n/$n inclusive.
*/
class Task7
{
    public function generate_integers($n){
        $arr=[];
        for ($i=0;$i<=$n;$i++){
            $arr[]=$i;
        }
        return $arr;
    }
}