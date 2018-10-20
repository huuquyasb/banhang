<?php 
/**
* 
*/
class menu_category
{
	public $model;
	function __construct()
	{
		$this->model=new model();
		$category= $this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc");
		if($category){
			include "view/frontend/view_menu_category.php";
		}else{
			include "view/frontend/view_not_found.php";
		}
		
	}
}
new menu_category();
 ?>