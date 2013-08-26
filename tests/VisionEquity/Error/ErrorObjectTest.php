<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use VisionEquity\Error\ErrorObject;
/**
 * Description of ErrorObjectTest
 *
 * @author Eric Jones
 */
class ErrorObjectTest extends PHPUnit_Framework_TestCase
{
    public function testErrorObjectGetError()
    {
        $error = '404:Not Found';
        $errorObject = new ErrorObject($error);
        $this->assertEquals($error, $errorObject->getError());
    }
}
