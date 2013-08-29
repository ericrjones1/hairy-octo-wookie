<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use HairyOctoWookie\Error\SimpleErrorObject;
/**
 * Description of ErrorObjectTest
 *
 * @author Eric Jones
 */
class SimpleErrorObjectTest extends PHPUnit_Framework_TestCase
{
    protected $error = '404:Not Found';
    
    public function testSimpleErrorObjectInterfaces()
    {
        $simpleErrorObject = new SimpleErrorObject($this->error);
        $implements = class_implements($simpleErrorObject);
        $this->assertTrue(
            in_array(
                'HairyOctoWookie\Error\SimpleErrorInterface',
                $implements
            )
        );
    }
    
    public function testSimpleErrorObjectGetError()
    {
        $errorObject = new SimpleErrorObject($this->error);
        $this->assertEquals($this->error, $errorObject->getError());
    }
}
