<?php
require "vendor/autoload.php";
require "BerlinClock.php";
use BerlinClock;
use \PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    //TEST SIMPLES MINUTES

    public function test_CalculateMinutes_given12H00_returnNothing(){
        $test = new BerlinClock();
        $timer="12:00:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("",$actual);
    }
    public function test_CalculateMinutes_given12H01_returnY(){
        $test = new BerlinClock();
        $timer="12:01:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("Y",$actual);
    }
    public function test_CalculateMinutes_given12H02_returnYY(){
        $test = new BerlinClock();
        $timer="12:02:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YY",$actual);
    }
    public function test_CalculateMinutes_given12H03_returnYYY(){
        $test = new BerlinClock();
        $timer="12:03:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YYY",$actual);
    }
    public function test_CalculateMinutes_given12H59_returnYYYY(){
        $test = new BerlinClock();
        $timer="12:59:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YYYY",$actual);
    }

}
