<?php
namespace Source;
/*
 *Calculation of the Fibonacci functions for 3 digits
 * [1 1 1]=>[1 1 1 3 5 9 ..]
 */
class Task1{
   public function fib($arr,$num){
        for($i=$num-3;$i>0;$i--){
            $arr[]=array_sum(array_slice($arr,-3));
        }
        return $arr;
    }
}