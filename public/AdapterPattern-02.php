<?php

require_once __DIR__ . '/../vendor/autoload.php';

/*
 * To run the Log Completx Error Object to CSV
 * 
 * Note: the ">" represents your command-line / terminal.
 * 
 * > cd << path to the public folder >>
 * > php -f AdapterPattern-02.php
 * > '500:Server Error'
 * 
 * The CSV file should be in app/logs/log.csv
 */

// Complex Error Object That Logs To CSV file
$errObj = new \HairyOctoWookie\Error\ComplexErrorObject('500:Server Error');
$logger = new \HairyOctoWookie\Error\Log\LogToCSV($errObj);
$logger->write();

// Complex Error Objext should also work with the LogToConsole
$stdErrLogger = new \HairyOctoWookie\Error\Log\LogToConsole($errObj);
$stdErrLogger->write();
