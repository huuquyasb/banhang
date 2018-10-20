<?php 
/**
* 
*/
class controller_hot_product
{
	public $model;
	function __construct()
	{
		$this->model=new model();
		include "view/frontend/view_hot_product.php";
	}
}
new controller_hot_product();
 ?>