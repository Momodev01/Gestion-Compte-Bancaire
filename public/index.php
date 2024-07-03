<?php
define('WEBROOT', "http://localhost:7000");
define('.DIRECTORY_SEPARATOR.', "/");

require_once "../src/core/Rooter.php";

Rooter::run();
