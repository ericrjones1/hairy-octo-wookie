<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace VisionEquity\Error\Log;

use VisionEquity\Error\ErrorObject;

/**
 * Description of LogToConsole
 *
 * @author Eric
 */
class LogToConsole implements ErrorLogInterface
{
    /**
     * ErrorObject
     * 
     * @var VisionEquity\Error\ErrorObject
     */
    private $_errorObject;
    
    public function __construct(ErrorObject $errorObject)
    {
        $this->_errorObject = $errorObject;
    }
    
    public function write()
    {
        fwrite(STDERR, $this->_errorObject->getError());
    }
}
