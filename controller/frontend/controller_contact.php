<?php 
/**
* 
*/
class controller_contact
{
	public $model;
	function __construct()
	{
        $msg = '';
        $this->model=new model();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          
            if(isset($_POST["form_type"]) && $_POST["form_type"]=='contact'){
                $name = $_POST["form_type"];
                $email = $_POST["email"];
                $content = $_POST["content"];
                //insert ban ghi
                $this->model->execute("insert into tbl_contact(name,email,content) values('$name','$email','$content')");
                $msg = 'Cảm ơn bạn đã liên hệ chúng tôi.';
            }
            
        }
		include "view/frontend/view_contact.php";
	}
}
new controller_contact();
 ?>