<?php

require_once __DIR__ . '/../app/bootstrap.php';

$error = new \VisionEquity\Error\ErrorObject('404:Not Found');
$logger = new \VisionEquity\Error\Log\LogToConsole($error);
$logger->write();
