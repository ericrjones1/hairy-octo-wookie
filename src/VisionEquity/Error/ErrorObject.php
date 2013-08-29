<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace VisionEquity\Error;

/**
 * Description of ErrorObject
 *
 * @author Eric
 */
class ErrorObject implements SimpleErrorInterface
{
    private $_error;
    
    public function __construct($error)
    {
        $this->_error = $error;
    }
    
    public function getError()
    {
        return $this->_error;
    }
}
