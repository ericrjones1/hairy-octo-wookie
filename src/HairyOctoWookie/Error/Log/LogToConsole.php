<?php

namespace HairyOctoWookie\Error\Log;

use HairyOctoWookie\Error\SimpleErrorInterface;

class LogToConsole implements ErrorLogInterface
{
    /**
     * ErrorObject
     * 
     * @var VisionEquity\Error\SimpleErrorInterface
     */
    private $_errorObject;
    
    public function __construct(SimpleErrorInterface $errorObject)
    {
        $this->_errorObject = $errorObject;
    }
    
    public function write()
    {
        fwrite(STDERR, $this->_errorObject->getError());
    }
}
