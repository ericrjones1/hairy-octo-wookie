<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use HairyOctoWookie\Error\ComplexErrorObject;
/**
 * Description of ComplexErrorObjectTest
 *
 * @author Eric
 */
class ComplexErrorObjectTest extends PHPUnit_Framework_TestCase
{
    protected $errNum = '404';
    protected $errText = 'Not Found';
    protected $error;
    protected $errObj;
    
    protected function setUp()
    {
        $this->error = "{$this->errNum}:{$this->errText}";
        $this->errObj = new ComplexErrorObject($this->error);
    }
    
    public function testComplexErrorObjectInterfaces()
    {
        $implements = class_implements($this->errObj);
        $this->assertTrue(
            in_array(
                'HairyOctoWookie\Error\SimpleErrorInterface',
                $implements
            )
        );
        
        $this->assertTrue(
            in_array(
                'HairyOctoWookie\Error\ComplexErrorInterface',
                $implements
            )
        );
    }
    
    public function testComplexErrorObjectGetErrorNumber()
    {
        $this->assertEquals($this->errNum, $this->errObj->getErrorNumber());
    }
    
    public function testComplexErrorObjectGetErrorText()
    {
        $this->assertEquals($this->errText, $this->errObj->getErrorText());
    }
}
