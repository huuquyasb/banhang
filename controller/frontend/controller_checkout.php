<?php 
/**
* 
*/
class controller_checkout
{
	public $model;
	function __construct()
	{
        $msg = '';
        $err = '';
        $this->model=new model();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          
            if(isset($_POST["form_type"]) && $_POST["form_type"]=='contact'){
                $name = $_POST["name"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
                if($name == '' ||  $email == '' || $phone == '' || $address == ''){
                    $err = 'Vui lòng nhập đầy đủ các thông tin';
                }else{
                    $productlist=array();

                    if(isset($_SESSION["cart"]) && count($_SESSION["cart"])>0){
                        foreach ($_SESSION["cart"] as $rows) {                     
                            array_push( $productlist,$rows["pk_product_id"]);
                        }
                        $product_id = implode(";",$productlist);
                        $client = $_POST["client"];
                        $note = $_POST["note"];
                        //insert ban ghi
                        $this->model->execute("insert into tbl_order(name,email,phone,address,product_id,client,note) values('$name','$email','$phone','$address','$product_id','$client','$note')");
                        $msg = 'Cảm ơn bạn đã đặt hàng chúng tôi sẽ liên hệ sớm.';
                        if(isset($_SESSION['cart'])){
                            $_SESSION['cart'] = array();
                          
                        }
                    }else{
                        echo "<script>location.href='index.php';</script>";
                    }
                }
               
               
               
            }
            
        }
		include "view/frontend/view_checkout.php";
	}
}
new controller_checkout();
 ?>