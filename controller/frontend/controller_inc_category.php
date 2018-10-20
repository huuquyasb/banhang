<?php 
/**
* 
*/
class controller_inc_category
{
	public $model;
	function __construct()
	{
		$this->model=new model();
		include "view/frontend/view_inc_category.php";
	}
}
new controller_inc_category();
 ?>