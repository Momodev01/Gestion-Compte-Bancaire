<?php
define('WEBROOT', "http://localhost:7000");
session_start();
require_once "../src/core/Rooter.php";


Rooter::run();
