<?php 
/**
* 
*/
class controller_hot_product_trangcon
{
	public $model;
	function __construct()
	{
		$this->model=new model();
		include "view/frontend/view_hot_product_trangcon.php";
	}
}
new controller_hot_product_trangcon();
 ?>