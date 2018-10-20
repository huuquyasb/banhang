<?php 
	//start session
	session_start();
	//load config.php
	include "config.php";
	//load model.php
	include "model/model.php";
	//kiem tra neu user chua dang nhap thi yeu cau phai dang nhap (load MVC login), neu user da dang nhap thi hien thi view_layout.php
	if(isset($_SESSION["is_admin"]) == false)
		include "controller/backend/controller_login.php";
	else{
		//------------
		//lay bien controller truyen tu url
		$param_from_url = isset($_GET["controller"]) ? $_GET["controller"] : "";
		//tao duong dan den file controller khi do co thong tin truyen tu url
		$file_controller = "controller/backend/controller_$param_from_url.php";
		//------------
		include "view/backend/master.php";
	}
 ?>