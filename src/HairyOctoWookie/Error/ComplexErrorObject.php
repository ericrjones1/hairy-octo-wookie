<?php

namespace HairyOctoWookie\Error;

/**
 * Complex Error Object
 * 
 * From a single error string in the format of "<ErrorNumber>:<ErrorText>",
 * this class can provide the ErrorNumber, ErrorText, or the entire ErrorString
 * 
 * Adapter Pattern
 * 
 * @author Eric Jones <e@erj1.com>
 */
class ComplexErrorObject extends SimpleErrorObject implements ComplexErrorInterface
{
    /**
     * Error Number
     * 
     * @var integer
     */
    private $errNum;
    
    /**
     * Error Text
     * 
     * @var string
     */
    private $errText;
    
    /**
     * Intializes the ErrorString, and splits the ErrorString into ErrorNumber,
     * and ErrorText.
     * 
     * @param string $error Error string in the format of
     * "<ErrorNumber>:<ErrorText>"
     */
    public function __construct($error)
    {
        parent::__construct($error);
        
        $parts = explode(':', $this->getError());
        $this->errNum  = $parts[0];
        $this->errText = $parts[1];
    }
    
    /**
     * Returns the error number
     * 
     * @return integer
     */
    public function getErrorNumber()
    {
        return $this->errNum;
    }
    
    /**
     * Returns the error string
     * 
     * @return string
     */
    public function getErrorText()
    {
        return $this->errText;
    }
}
