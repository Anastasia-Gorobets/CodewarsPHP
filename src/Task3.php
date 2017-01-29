<?php
namespace Source;
/*
 * https://www.codewars.com/kata/58223370aef9fc03fd000071/train/php
 * Given a number, return a string with dash'-'marks before and after each odd integer,
 *  but do not begin or end the string with a dash mark.
 */
class Task3
{
    function isOdd($number)
    {
        if ($number % 2 == 0) return false;
        return true;
    }

    function isFirstSymbol($index)
    {
        if ($index == 0) return true;
        return false;
    }

    function isLastSymbol($index, $arr)
    {
        if ($index == strlen($arr) - 1) return true;
        return false;
    }

    public function dashatize($num)
    {
        $str = (string)$num;
        if ($str[0] == '-' && strlen($str) == 2) {
            return $str[1];
        } elseif ($str[0] == '-') {
            $str = substr($str, 1);
        }
        $res = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if ($this->isOdd($str[$i])) {
                if ($this->isFirstSymbol($i)) {
                    $res .= $str[$i] . '-';
                } elseif ($this->isLastSymbol($i, $str)) {
                    $res .= '-' . $str[$i];
                } else {
                    $res .= '-' . $str[$i] . '-';
                }
            } else {
                $res .= $str[$i];
            }
        }
        return str_replace('--', '-', $res);
    }
}
