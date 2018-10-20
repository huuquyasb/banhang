<?php 
/**
 * 
 */
 class controller_product
 {
 	public $model;
 	function __construct()
 	{
 		$this->model = new model();
			$id= isset($_GET["id"])? $_GET["id"] :0;
		    
			//------------------
			// quy dinh so ban ghi tren 1 trang
			$record_per_page = 8;
			//tinh tong so ban ghi
			if($id != 0){
				$total = $this->model->num_rows("select pk_product_id from tbl_product where fk_category_product_id=$id");
			}else{
				$total = $this->model->num_rows("select pk_product_id from tbl_product");
			}
			
			//tinh so trang
			$num_page = ceil($total/$record_per_page);
		
			//lay bien p truyen tu url (bien nay de biet trang hien tai la trang 1 hay trang 2 hay 3)
			$p = isset($_GET["p"])&&$_GET["p"]>=1 ? ($_GET["p"]-1) : 0;
			$from = $p*$record_per_page;
			//lay cac ban ghi co phan trang
			if($id != 0){
				$arr = $this->model->get_all("select * from tbl_product where fk_category_product_id=$id order by pk_product_id desc limit $from, $record_per_page");
				$category=$this->model->get_a_record("select * from tbl_category_product where pk_category_product_id=$id");
			}else{
				$arr = $this->model->get_all("select * from tbl_product  order by pk_product_id desc limit $from, $record_per_page");
			}
		   	//-------------------
			//load view
			include "view/frontend/view_product.php";
 	}
 }
 new controller_product(); ?>