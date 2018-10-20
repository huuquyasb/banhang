<?php 
/**
* 
*/
class controller_post
{
	public $model;
	function __construct()
	{
		# code...
        $this->model=new model();
        $id=isset($_GET["id"])?$_GET["id"]:0;
        $post = $this->model->get_a_record("select * from tbl_news where pk_news_id=$id");
        
        if(!$post){
            include "view/frontend/view_not_found.php";
        }else{
            $viewed = (int) $post->viewed + 1;
			$this->model->execute("update tbl_news set viewed='$viewed' where pk_news_id=$id");					
            $cate_id = $post->fk_category_news_id;
            $arr = $this->model->get_all("select * from tbl_news where fk_category_news_id=$cate_id order by pk_news_id desc limit 0, 6");
            include "view/frontend/view_post.php";
        }
		
	}
}
new controller_post();
 ?>