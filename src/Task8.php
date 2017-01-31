<?php
/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 31.01.2017
 * Time: 17:37
 */

namespace Source;


class Task8
{
    function reverser( $sentence) {
        $arr=explode(" ",$sentence);
        $res="";
        foreach ($arr as $a){
            $res.=strrev($a).' ';
        }
        return substr($res,0,strlen($res)-1);
    }

}