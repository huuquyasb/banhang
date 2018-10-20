<?php 
/**
* 
*/
class controller_lates_product
{
	public $model;
	function __construct()
	{
		$this->model=new model();
		include "view/frontend/view_lates_product.php";
	}
}
new controller_lates_product();
 ?>