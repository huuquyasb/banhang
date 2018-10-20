<?php 
	//huy session
    unset($_SESSION["login_user"]);
    session_destroy ();
	//quay tro lai trang index.php
    echo "<script>location.href='index.php';</script>";
 ?>