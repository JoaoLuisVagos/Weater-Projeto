<?php
require_once '../src/config.php';

use Src\Controllers\HomeController;

$controller = new HomeController();
$controller->index();
