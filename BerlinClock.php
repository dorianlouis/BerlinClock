<?php


class BerlinClock
{
    public function calculateMinutes($timer){
        $var=explode(":",$timer);
        $minutes = strval($var[1]) ;
        $mod = $minutes%5;
        $string ="";
        for ($i =0; $i<$mod;$i++) {
            $string .= "Y";
        }
        return $string;
    }
    public function calculateBlockOfMinutes($timer){
        $var=explode(":",$timer);
        $minutes = strval($var[1]) ;
        $blocks = $minutes/5;
        $string ="";
        for ($i =1; $i<=$blocks;$i++) {
            if($i%3==0)
                $string .= "R";
            else
                $string .= "Y";
        }
        return $string;
    }

}