<?php
require_once './app/controllers/StudentController.php';

use App\Controllers\StudentController;

$controller = new StudentController();
$controller->index();
?>