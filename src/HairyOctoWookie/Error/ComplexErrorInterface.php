<?php

namespace HairyOctoWookie\Error;

/**
 * Complex Error Interface
 * 
 * @author Eric Jones <e@erj1.com>
 */
interface ComplexErrorInterface
{
    public function getErrorNumber();
    public function getErrorText();
}
