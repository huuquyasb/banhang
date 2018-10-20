<?php 
/**
* 
*/
class menu_news
{
	public $model;
	function __construct()
	{
		$this->model=new model();
		$category= $this->model->get_all("select * from tbl_category_news order by c_name asc");
		if($category){
			include "view/frontend/view_menu_news.php";
		}else{
			include "view/frontend/view_not_found.php";
		}
		
	}
}
new menu_news();
 ?>