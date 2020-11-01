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

    //TEST BLOCK OF MINUTES

    public function test_CalculateBlockOfMinutes_given12H00_returnNothing(){
        $test = new BerlinClock();
        $timer="12:00:00";
        $actual = $test->calculateBlockOfMinutes($timer);
        $this->assertEquals("",$actual);
    }
    public function test_CalculateBlockOfMinutes_given12H05_returnNothing(){
        $test = new BerlinClock();
        $timer="12:05:00";
        $actual = $test->calculateBlockOfMinutes($timer);
        $this->assertEquals("Y",$actual);
    }
    public function test_CalculateBlockOfMinutes_given12H15_returnNothing(){
        $test = new BerlinClock();
        $timer="12:15:00";
        $actual = $test->calculateBlockOfMinutes($timer);
        $this->assertEquals("YYR",$actual);
    }
    public function test_CalculateBlockOfMinutes_given12H55_returnNothing(){
        $test = new BerlinClock();
        $timer="12:55:00";
        $actual = $test->calculateBlockOfMinutes($timer);
        $this->assertEquals("YYRYYRYYRYY",$actual);
    }
    //TEST SIMPLES HOURS
    public function test_CalculateHours_given10H_returnNothing(){
        $test = new BerlinClock();
        $timer="10:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("",$actual);
    }
    public function test_CalculateHours_given11H_returnR(){
        $test = new BerlinClock();
        $timer="11:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("R",$actual);
    }

}
