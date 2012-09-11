<?php

class EPMeasure
{
    private static $startTime = null;
    
    public static function start()
    {
        self::$startTime = microtime(true);
    }
    
    public static function stop()
    {
        $stopTime = microtime(true);
        
        return ($stopTime - self::$startTime);
    }
}

?>