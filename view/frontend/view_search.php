
     



      <div id="content" class="site-content" style="margin-top: 93px;">

<div class="breadcrumbs">
    <div class="container">
        <div class="row" <span=""><span><a href="http://khomaudepraothue.com/fashion2">Trang chủ</a> » <span class="breadcrumb_last">Sản phẩm</span></span>
        </div>
    </div>
</div>
<div class="containers">
    <div class="rows">
        <div id="layout" class="clearfix sidebar-left">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <header class="woocommerce-products-header">

                        <div class="imges_cate">
                            <a href=""><img src="/public/assets/wp-content/uploads/2018/06/cate.png" alt=""></a>
                        </div>

                        <div class="term-description">
                            <p><span style="font-size: 18pt; color: #ff4081;">Có <?php if(isset($arr)){ echo count($arr);}else { echo '0';}?>kết quả </span></p>
                           
                        </div>
                        <h1 class="woocommerce-products-header__title page-title">Sản phẩm				<span class="rt_grid_layout">
                            <a href="#" id="grid" title="grid"><span class="grid-view"><i class="fa fa-th"></i>Lưới</span></a>
                            <a href="#" id="list" title="list"><span class="exerpt-view"><i class="fa fa-list-ul"></i>Cột</span></a>
                          </span>
                        </h1>

                    </header>

                    <div class="result_count-ordering clearfix">

                    </div>

                    <ul class="list-unstyled row product-style rt-view grid">
                      <?php 
                        foreach ($arr as $rows){ 
                      ?>
                        <li class="col-lg-3 lg-4-cl col-md-3 md-4-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl post-286 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock sale shipping-taxable purchasable product-type-simple">
                            <div class="product_item">
                                <div class="rt-thumb">
                                    <a class="rt-tooltip" data-tooltip="{&quot;image&quot;: &quot;http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/phong-cach-thoi-thuong-cua-tin-do-thoi-trang-viet-ngay-giao-mua-37-.8058.jpg&quot;}" href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id ?>"><img width="600" height="600" src="public/upload/product/<?php echo $rows->c_img ?>" sizes="(max-width: 600px) 100vw, 600px"></a>
                                    <input type="hidden" class="xcp-hidden-id" value="286">
                                    <div class="rt_add_to_cart clearfix">
                                        <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id ?>" class="view_product"><i class="fa fa-search-plus"></i></a>

                                        <a rel="nofollow" href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id ?>" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Đặt mua</a></div>
                                    <span class="percent">-3%</span></div>
                                <div class="content">
                                    <h3><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id ?>" class="rt_woocommerce_title"><?php echo $rows->c_name ?></a></h3>
                                    <div class="star_pro"> <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    <p class="price"><span> Giá : <?php echo number_format($rows->c_price) ?>VNĐ </span></p>
                                    <div class="des_pro_ex">
                                        <h3>Mô tả ngắn </h3>
                                        <div class="woocommerce-product-details__short-description">
                                            <p><?php echo $rows->c_description ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                      <?php } ?>
                   

                    </ul>

                    <div class="wp-pagenavi">
                        <ul class="page-numbers">
                        <?php 
                         for ($i=1; $i<=$num_page; $i++) { 
                        ?>
                         <li><a class="page-numbers" href="index.php?controller=product&key=<?php echo $key; ?>&p=<?php echo $i; ?>"><?php  echo $i; ?></a></li>
                        <?php
                        } ?>
                           
                           
     
                        </ul>
                    </div>

                </main>
            </div>

            <aside id="secondary-1" class="sidebar widget-area">           
                <!-- categories -->
                <?php include "controller/frontend/controller_categories.php"; ?>
                <!-- !categories -->
                <!-- support -->
                <?php include "controller/frontend/controller_support.php"; ?>
                <!-- !support -->
                <!-- new posts -->
               <?php include "controller/frontend/controller_new_post.php"; ?>
                <!-- !new posts -->
            </aside>

        </div>
        <!-- #layout -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->

</div>