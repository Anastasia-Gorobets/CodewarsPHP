<?php

namespace Source;
/*
https://www.codewars.com/kata/57873ab5e55533a2890000c7/train/php
You have to create a method, that corrects a given time string. There was a problem in addition, so many of the time strings are broken. Time-Format is european. So from "00:00:00" to "23:59:59".

Some examples:

"09:10:01" -> "09:10:01"
"11:70:10" -> "12:10:10"
"19:99:99" -> "20:40:39"
"24:01:01" -> "00:01:01"

If the input-string is null or empty return exactly this value! (empty string for C++)
If the time-string-format is invalid, return null. (empty string for C++)
*/
class Task5
{
    function  isHourRange($hour){
        $hour=(int)$hour;
        if($hour<= 23 && $hour>=0)return true;
        else {
            return false;
        }
    }
    function  isMinuteRange($minute){
        $minute=(int)$minute;
        if($minute<= 59 && $minute>=0)return true;
        else {
            return false;
        }
    }
    function  isSecondRange($second){
        $second=(int)$second;
        if($second <=  59 && $second>=0)return true;
        else {
            return false;
        }
    }
    function isAllCorrect($hour,$minutes,$seconds){
        $flag=true;
        if(!$this->isHourRange($hour))$flag=false;
        if(!$this->isMinuteRange($minutes))$flag=false;
        if(!$this->isSecondRange($seconds))$flag=false;
        return $flag;
    }
    public function timeCorrect($timestring) {
        if($timestring == "" || $timestring == null)return $timestring;
        $reg="/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/";
        if(!preg_match($reg,$timestring))return null;
        $arr=explode(':',$timestring);
        $hour=$arr[0];
        $minutes=$arr[1];
        $seconds=$arr[2];
        $minutLimit=59;
        if($this->isAllCorrect($hour,$minutes,$seconds)){
            $res=$hour.':'.$minutes.':'.$seconds;
        }else{
            //check hours
            if(!$this->isHourRange($hour)){
                $hour='00';
            }elseif(!$this->isMinuteRange($minutes)){
                if($this->isSecondRange($seconds))$minutLimit=60;
                    $t=(int)$minutes-$minutLimit;
                    $minutes=$t;
                    $hour++;
                if(!$this->isSecondRange($seconds)){
                    $t2=(int)$seconds-60;
                    $seconds=$t2;
                }
                }
        }
       return $hour.':'.$minutes.':'.$seconds;
}
}