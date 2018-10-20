<?php 
/**
* 
*/
class controller_categories
{
	public $model;
	function __construct()
	{
		$this->model=new model();
		$category= $this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc");
		if($category){
			include "view/frontend/view_categories.php";
		}else{
			include "view/frontend/view_not_found.php";
		}
		
	}
}
new controller_categories();
 ?>