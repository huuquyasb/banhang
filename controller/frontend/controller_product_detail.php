<?php 
/**
* 
*/
class controller_product_detail
{
	public $model;
	function __construct()
	{
		# code...
		$this->model=new model();
		$id=isset($_GET["id"])?$_GET["id"]:0;
		$product=$this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
		
		if(!$product){
            include "view/frontend/view_not_found.php";
        }else{
			
            include "view/frontend/view_product_detail.php";
        }
		
	}
}
new controller_product_detail();
 ?>