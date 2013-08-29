<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use HairyOctoWookie\Error\Log\LogToConsole;

/**
 * Description of LogToConsoleTest
 *
 * @author Eric
 */
class LogToConsoleTest extends PHPUnit_Framework_TestCase
{
    /**
     * I have not seen a way to catpure the STDERR stream and check its
     * contents.  So I tested the write functionality once manually.
     * To do better testing the class needs to be rewritten.
     * 
     * I also found this on StackOverflow.
     * http://stackoverflow.com/questions/8348927/is-there-a-way-test-stderr-output-in-phpunit
     */
    public function testLogToConsoleWrite()
    {
        $this->markTestIncomplete('Unable To Capture STDERR stream');
    }
}
