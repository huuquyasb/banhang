<?php 
session_start();
// Turn off all error reporting
// error_reporting(0);
include "config.php";
include "function.php";
include "model/model.php";
$param_from_url=isset($_GET["controller"])?$_GET["controller"]:"";
	// tao duong dan den filecontroller khi do co thong tin chuyen tu url
	$file_controller="controller/frontend/controller_$param_from_url.php";
	if(file_exists($file_controller))
	include "view/frontend/master_trangcon.php";
else
		include "view/frontend/master_trangchu.php";
 ?>