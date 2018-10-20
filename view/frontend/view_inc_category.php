 <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
      <ul class="list-group category_block">
       <?php $category=$this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc");
 foreach ($category as $rows) {
   # code...
 
        ?>
        <li class="list-group-item"><a href="index.php?controller=product&id=<?php echo $rows->pk_category_product_id ?>"><?php echo $rows->c_name; ?></a></li>
         <?php } ?>
      </ul>