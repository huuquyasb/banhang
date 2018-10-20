<!-- lates product -->
 <h2 class="heading">
  <a href="#">
      Hàng mới về						           	
  </a>
</h2>
<div class="home-product  row">
  <ul class="woocommerce product_style_2">
    <?php 
        $product=$this->model->get_all("select * from tbl_product order by pk_product_id limit 0,8");
        
        foreach ($product as $rows) {
    ?>
      <li class="col-lg-3 lg-4-cl col-md-3 md-4-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl post-285 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock shipping-taxable product-type-simple">
          <div class="product_item">
              <div class='rt-thumb'>
                  <a class='rt-tooltip' href='index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>'><img width="600" height="600" src="/public/upload/product/<?php echo $rows->c_img; ?>" /></a>
                  <input type="hidden" class="xcp-hidden-id" value="285">
                  <div class="rt_add_to_cart clearfix">
                      <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="view_product"><i class="fa fa-search-plus"></i></a>

                      <a rel="nofollow" href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id ?>" data-quantity="1" data-product_id="285" data-product_sku="A0001-3-7-1-8" class="button product_type_simple ajax_add_to_cart">Đặt mua</a></div>
              </div>
              <div class="content">
                  <h3><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="rt_woocommerce_title"><?php echo $rows->c_name; ?></a></h3>
                  <div class='star_pro'> <i class="far fa-star"></i>
                  </div>
                  <p class="price"><span>Giá :<?php echo number_format($rows->c_price); ?>VND</span></p>
                  <div class='des_pro_ex'>
                      <h3>Mô tả ngắn </h3>
                      <div class="woocommerce-product-details__short-description">
                          <p>
                          <?php echo $rows->c_description; ?>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </li>
      <?php } ?>
    
  </ul>
</div>