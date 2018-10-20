
 <?php 
	class controller_last_posts{
		public $model;
		public function __construct(){
			//---------
			$this->model = new model();
	
			//lay cac ban ghi
			$arr = $this->model->get_all("select * from tbl_news order by pk_news_id desc limit 6");
			//---------
			//load view
			include "view/frontend/view_last_posts.php";
		}
	}
	new controller_last_posts();
 ?>