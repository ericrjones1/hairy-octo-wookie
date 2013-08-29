<?php

require_once __DIR__ . '/../app/bootstrap.php';

$error = new \VisionEquity\Error\ComplexErrorObject('404:Not Found');
$logger = new \VisionEquity\Error\Log\LogToCSV($error);
$logger->write();
