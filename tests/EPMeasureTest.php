<?php

class EPMeasureTest extends PHPUnit_Framework_TestCase
{
    public function testEP()
    {
        EPMeasure::start();
        
        $retval = EPMeasure::stop();
        
        $this->assertInternalType('float', $retval);
    }
}

