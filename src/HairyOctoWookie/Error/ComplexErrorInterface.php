<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace HairyOctoWookie\Error;

/**
 *
 * @author Eric
 */
interface ComplexErrorInterface
{
    public function getErrorNumber();
    public function getErrorText();
}
