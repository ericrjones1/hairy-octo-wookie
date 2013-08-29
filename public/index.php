<?php

require_once __DIR__ . '/../app/bootstrap.php';

$error = new \HairyOctoWookie\Error\ComplexErrorObject('404:Not Found');
$logger = new \HairyOctoWookie\Error\Log\LogToCSV($error);
$logger->write();
