<?php 
	class controller_login{
		//tao bien model
		public $model;
		public function __construct(){
			//khoi tao object cua class model, gan vao bien model
			$this->model = new model();
			$msg = '';
			//----------------
			//neu user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_email = $_POST["c_email"];
				$c_password = $_POST["c_password"];
				//kiem tra dang nhap
				$check = $this->model->get_a_record("select c_email, c_password from tbl_user where c_email='$c_email' and role = 1");
				if(isset($check->c_email)){
					if($check->c_password == md5($c_password)){
						//gan vao session
						$_SESSION["c_email"] = $c_email;
						$_SESSION["is_admin"] = true;
						//quay tro lai trang admin
						header("location:admin.php");
					}else{
						$msg = 'Email hoặc mật khẩu không đúng.';
					}
				}else{
					$msg = 'Email hoặc mật khẩu không đúng.';
				}
			}
			//----------------
			//load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>