<?php 
	class controller_category_news{
		public $model;
		public function __construct(){
			//---------
			$this->model = new model();
			//---------
			//lay bien act tu url
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "delete":
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_user where pk_user_id=$id");
					//quay tro lai trang user
					header("location:admin.php?controller=user");
				break;
			}
			//---------
			//quy dinh so ban ghi tren 1 trang
			$record_perpage = 10;
			//tinh tong so ban ghi
			$total = $this->model->get_num_rows("select * from tbl_category_news");
			//tinh so trang
			$num_page = ceil($total/$record_perpage);
			//lay trang hien tai (la bien p truyen tu url)
			$page = isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $page * $record_perpage;
			//lay cac ban ghi
			$arr = $this->model->get_all("select * from tbl_category_news order by c_name desc limit $from,$record_perpage");
			//---------
			//load view
			include "view/backend/view_category_news.php";
		}
	}
	new controller_category_news();
 ?>