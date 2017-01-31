<?php
namespace Source;
/*
In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G"
https://www.codewars.com/kata/complementary-dna/train/php
*/

class Task10
{
    public function DNA_strand($dna)
    {

        for ($i = 0; $i < strlen($dna); $i++) {
            switch ($dna[$i]) {
                case 'A':
                    $dna[$i] = 'T';
                    break;
                case 'T':
                    $dna[$i] = 'A';
                    break;
                case 'C':
                    $dna[$i] = 'G';
                    break;
                case 'G':
                    $dna[$i] = 'C';
                    break;
            }
        }

        return $dna;

        /*
         * $conversion = ["A"=>"T","T"=>"A","G"=>"C", "C"=>"G"] ;
  $dna = str_split($dna) ;
  $res = "" ;
  foreach($dna as $el){
    $res .= $conversion[$el] ;
  }
  return $res ;
         *
         */


    }

}