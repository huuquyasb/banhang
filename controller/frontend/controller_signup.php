<?php 
	class controller_signup{
		//tao bien model
		public $model;
		public function __construct(){
			//khoi tao object cua class model, gan vao bien model
			$this->model = new model();
			$msg = '';
			if(isset($_SESSION["login_user"])){
				echo "<script>location.href='index.php';</script>";
			}
			//----------------
			//neu user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_email = $_POST["email"];
				$c_password = $_POST["password"];
				$c_fullname = $_POST["fullname"];
				
				$confirm_password= $_POST["confirm_password"];
				if($c_email !='' || $c_password =='' || $c_fullname == ''){
					if($confirm_password != $c_password){
						$msg = 'Mật khẩu không trùng khớp.';
					}else{
						//kiem tra dang nhap
						$check = $this->model->get_a_record("select c_email, c_password from tbl_user where c_email='$c_email'");
						if(isset($check->c_email)){
							$msg = 'Email đã tồn tại trong hệ thống.';
						}else{
							$_SESSION["login_user"] = $c_fullname;
							$c_password = md5($c_password);
							//insert ban ghi
							$this->model->execute("insert into tbl_user(c_fullname,c_email,c_password) values('$c_fullname','$c_email','$c_password')");
							echo "<script>location.href='index.php';</script>";
						}
					}
					
				}else{
					$msg = 'Vui lòng nhập đầy đủ thông tin.';
				}
				
			}
			//----------------
			//load view
			include "view/frontend/view_signup.php";
		}
	}
	new controller_signup();
 ?>