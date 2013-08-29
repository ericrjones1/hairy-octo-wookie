<?php

require_once __DIR__ . '/../vendor/autoload.php';

/*
 * To run the Log Simple Error Object to STDERR
 * 
 * Note: the ">" represents your command-line / terminal.
 * 
 * > cd << path to the public folder >>
 * > php -f AdapterPattern-01.php
 * > "500:Server Error"
 */

// Simple Error Object That Logs To STDERR
$errObj = new \HairyOctoWookie\Error\SimpleErrorObject('500:Server Error');
$logger = new \HairyOctoWookie\Error\Log\LogToConsole($errObj);
$logger->write();
