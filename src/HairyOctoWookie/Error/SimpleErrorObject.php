<?php

namespace HairyOctoWookie\Error;

/**
 * Simple Error Object
 * 
 * Accepts and returns error strings
 *
 * @author Eric Jones <e@erj1.com>
 */
class SimpleErrorObject implements SimpleErrorInterface
{
    /**
     * Error String
     * 
     * @var string
     */
    private $error;
    
    /**
     * Intializes the error string
     * 
     * @param string $error Error string in the format of
     * "<ErrorNumber>:<ErrorText>"
     */
    public function __construct($error)
    {
        $this->error = $error;
    }
    
    /**
     * Returns the error string
     * 
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
}
