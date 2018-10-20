<?php 
	//huy session
	unset($_SESSION["is_admin"]);
	//quay tro lai trang admin.php
	header("location:admin.php");
 ?>