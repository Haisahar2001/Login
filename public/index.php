<?php
require_once '../vendor/autoload.php';

define('APP_ROOT', dirname(__FILE__, 2));
const SITE_NAME = 'Login';

$application = new \App\Tools\Application();
$application->run();

