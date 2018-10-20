<?php 
/**
 * 
 */
 class controller_search
 {
 	public $model;
 	function __construct()
 	{
 		$this->model = new model();
			$key= isset($_GET["key"])? $_GET["key"] :"";
		 
			//------------------
			// quy dinh so ban ghi tren 1 trang
			$record_per_page = 6;
			//tinh tong so ban ghi
			$total = $this->model->num_rows("select pk_product_id from tbl_product where c_name like '%$key%' or c_description like '%key%'");
			//tinh so trang
			$num_page = ceil($total/$record_per_page);
			//lay bien p truyen tu url (bien nay de biet trang hien tai la trang 1 hay trang 2 hay 3)
			$p = isset($_GET["p"])&&$_GET["p"]>=1 ? ($_GET["p"]-1) : 0;
			$from = $p*$record_per_page;
			//lay cac ban ghi co phan trang
			$arr = $this->model->get_all("select * from tbl_product where c_name like '%$key%' or c_description like '%key%' order by pk_product_id desc limit $from, $record_per_page");
			//-------------------
			//load view
			include "view/frontend/view_search.php";
 	}
 }
 new controller_search(); ?>