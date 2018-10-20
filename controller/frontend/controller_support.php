<?php 
/**
* 
*/
class controller_support
{
	public $model;
	function __construct()
	{
        $msg = '';
        $this->model=new model();
      
		include "view/frontend/view_suport.php";
	}
}
new controller_support();
 ?>