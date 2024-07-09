<?php
require_once "../vendor/autoload.php";
use App\Core\Rooter;
define('WEBROOT', "http://localhost:7000");

require_once "../src/core/Rooter.php";

Rooter::run();
