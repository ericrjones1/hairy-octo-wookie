<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace HairyOctoWookie\Error;

/**
 * Description of ComplexErrorObject
 *
 * @author Eric
 */
class ComplexErrorObject extends SimpleErrorObject implements ComplexErrorInterface
{
    private $errNum;
    private $errText;
    
    public function __construct($error)
    {
        parent::__construct($error);
        
        $parts = explode(':', $this->getError());
        $this->errNum  = $parts[0];
        $this->errText = $parts[1];
    }
    
    public function getErrorNumber()
    {
        return $this->errNum;
    }
    
    public function getErrorText()
    {
        return $this->errText;
    }
}
