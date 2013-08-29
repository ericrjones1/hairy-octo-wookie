<?php

namespace VisionEquity\Error\Log;

use VisionEquity\Error\ComplexErrorInterface;

class LogToCSV implements ErrorLogInterface
{
    const CSV_LOCATION = './../app/logs/log.csv';
    
    private $_errorObject;
    
    public function __construct(ComplexErrorInterface $errorObject)
    {
        $this->_errorObject = $errorObject;
    }
    
    public function write()
    {
        $line = '';
        
        $line .= $this->_errorObject->getErrorNumber();
        $line .= ',';
        $line .= $this->_errorObject->getErrorText();
        $line .= "\n";
        
        file_put_contents(self::CSV_LOCATION, $line, FILE_APPEND);
    }
}
