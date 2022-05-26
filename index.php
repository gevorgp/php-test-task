<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$loader = require 'vendor/autoload.php';

use App\Run;

$runner = new Run();
try {
    $contract = $runner->run();
} catch (Exception $e) {
    echo $e;
}