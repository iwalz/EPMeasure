<?php

class EPMeasure
{
    private static $statKeeper = array();
    private static $startTime = null;
    private static $stopTime = null;
    private static $startMemory = null;
    private static $stopMemory = null;
    
    public static function start($marker = null)
    {
        self::$startTime = microtime(true);
        self::$startMemory = memory_get_usage(true);
    }
    
    public static function stop($marker = null)
    {
        self::$stopTime = microtime(true);
        self::$stopMemory = memory_get_usage(true);
        
        $stat = new EPStatistics();
        $runtime = self::$stopTime - self::$startTime;
        $stat->setRuntime($runtime);
        $stat->setMemory(((self::$stopMemory - self::$startMemory)/1024)/1024);
        
        return $stat;
    }
}

class EPStatistics
{
    private $runtime = null;
    private $memory = null;
    
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }
    
    public function getRuntime()
    {
        return $this->runtime;
    }
    
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }
    
    public function getMemory()
    {
        return $this->memory;
    }
}

?>