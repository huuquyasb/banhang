<?php 
/**
* 
*/
class controller_login
{
	public $model;
	function __construct()
	{
        $msg = '';
        if(isset($_SESSION["login_user"])){
            echo "<script>location.href='index.php';</script>";
        }
        $this->model=new model();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          
            if(isset($_POST["form_type"]) && $_POST["form_type"]=='contact'){
                $c_email = $_POST["email"];
				$c_password = $_POST["password"];
				//kiem tra dang nhap
				$check = $this->model->get_a_record("select c_email, c_password from tbl_user where c_email='$c_email'");
				if(isset($check->c_email)){
					if($check->c_password == md5($c_password)){
						//gan vao session
						$_SESSION["login_user"] = $c_email;
						//quay tro lai trang admin
                        echo "<script>location.href='index.php';</script>";
					}else{
                        $msg = 'Email hoặc mật khẩu không đúng';
                    }
				}else{
                    $msg = 'Email hoặc mật khẩu không đúng';
                }
            }
            
        }
		include "view/frontend/view_login.php";
	}
}
new controller_login();
 ?>