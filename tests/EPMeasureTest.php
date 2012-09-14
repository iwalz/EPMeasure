<?php

class EPMeasureTest extends PHPUnit_Framework_TestCase
{
    public function testEP()
    {
        echo PHP_EOL . "Start" . PHP_EOL;
        
        $foo = array();
        for($i = 0; $i < 10000; $i++)
        {
            $foo[] = str_repeat('ente', $i);
        }
        EPMeasure::start();
        unset($foo);
        $statistics = EPMeasure::stop();
        
        $this->assertInstanceOf('EPStatistics', $statistics);
    }
}

