<?php
namespace Source;
use yii\base\Exception;

/**
https://www.codewars.com/kata/52de553ebb55d1fca3000371/train/php
 * list will always be atleast 3 numbers. The missing term will never be the first or last one
 */
class Task2{
    public function findMissing($list){
        if(count($list)<3)throw new Exception("List must be atleast 3 numbers");
        $diff=$list[1]-$list[0];
        $d=$diff;
        $t=$diff;
        $count=0;
        for($i=1;$i<count($list)-1;$i++){
            $t1=$list[$i];
            $t2=$list[$i+1];
            $d=$t2-$t1;
            if($d==$t)$count++;
        }
        if($count>0){
            $diff=$diff;
        }else $diff=$d;
        $res=0;
        for($i=0;$i<count($list)-1;$i++){
            $t1=$list[$i]+$diff;
            $t2=$list[$i+1];
            if($t1 != $t2){
                $res=$t1;
            }
        }
        return $res;
    }
}
