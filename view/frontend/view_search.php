
     



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
                <div id="nav_menu-3" class="widget widget_nav_menu">
                    <h3 class="widget-title">Danh mục sản phẩm</h3>
                    <div class="menu-danh-muc-san-pham-container">
                        <ul id="menu-danh-muc-san-pham" class="menu">
                            <li id="menu-item-342" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-342"><a href="index9864.html?product_cat=hang-moi-ve">Hàng mới về</a></li>
                            <li id="menu-item-215" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-item menu-item-has-children menu-item-215"><a href="index6785.html?product_cat=san-pham">Sản phẩm</a>
                                <div class="touch"><i class="fa fa-angle-down"></i></div>
                                <ul class="sub-menu">
                                    <li id="menu-item-348" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-348"><a href="index577c.html?product_cat=san-pham-ban-chay">Sản phẩm bán chạy</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-343" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-343"><a href="index1619.html?product_cat=noi-that-noi-bat">Nội thất nổi bật</a></li>
                            <li id="menu-item-344" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-344"><a href="index577c.html?product_cat=san-pham-ban-chay">Sản phẩm bán chạy</a></li>
                            <li id="menu-item-345" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-345"><a href="index40a4.html?product_cat=san-pham-noi-bat">Sản phẩm nổi bật</a></li>
                        </ul>
                    </div>
                </div>
                <div id="prdctfltr-2" class="widget prdctfltr-widget">

                    <div class="prdctfltr_wc prdctfltr_woocommerce woocommerce prdctfltr_wc_widget pf_default prdctfltr_always_visible prdctfltr_click_filter prdctfltr_rows prdctfltr_scroll_default prdctfltr_disable_bar pf_mod_multirow prdctfltr_checkbox prdctfltr_hierarchy_circle prdctfltr_tabbed_selection prdctfltr_selected_reorder pf_remove_clearall" data-loader="css-spinner-full-01" data-id="prdctfltr-5b7d4508cbf72">

                        <div class="prdctfltr_add_inputs">
                            <input type="hidden" name="post_type" value="product"> </div>

                

                    </div>

                </div>
                <div id="support_online-2" class="widget support-online-widget">
                    <h3 class="widget-title">Hỗ trợ trực tuyến</h3>
                    <div id="supporter-info" class="gd_support_1">
                        <div id="support-1" class="supporter">
                            <div class="info">
                                <div class="img_suport"><img src="/public/assets/wp-content/uploads/2018/06/2a.jpg"></div>
                                <div class="support-rt"><span class="name-support">Hà Quỳnh</span><span class="phone-support phone-support_2 phone_support_3"><a href="tel:0905.356.356">0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-2" class="supporter">
                            <div class="info">
                                <div class="img_suport"><img src="/public/assets/wp-content/uploads/2018/06/1a.jpg"></div>
                                <div class="support-rt"><span class="name-support">Mai Hoa</span><span class="phone-support phone-support_2 phone_support_3"><a href="tel:0905.356.356">0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-3" class="supporter">
                            <div class="info">
                                <div class="img_suport"><img src="/public/assets/wp-content/uploads/2018/06/1a.jpg"></div>
                                <div class="support-rt"><span class="name-support">Hà Quỳnh</span><span class="phone-support phone-support_2 phone_support_3"><a href="tel:0905.356.356">0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-4" class="supporter">
                            <div class="info">
                                <div class="img_suport"><img src="/public/assets/wp-content/uploads/2018/06/2a.jpg"></div>
                                <div class="support-rt"><span class="name-support">Mai Hoa</span><span class="phone-support phone-support_2 phone_support_3"><a href="tel:0905.356.356">0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-5" class="supporter">
                            <div class="info">
                                <div class="img_suport"><img src="/public/assets/wp-content/uploads/2018/06/1a.jpg"></div>
                                <div class="support-rt"><span class="name-support">Hà Quỳnh</span><span class="phone-support phone-support_2 phone_support_3"><a href="tel:0905.356.356">0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                    </div>
                    <!-- end supporter-info -->
                </div>
                <div id="rt_widget_post-2" class="widget rt-widget rt-post-category">
                    <h3 class="widget-title">Tin tức mới</h3>
                    <!-- start file -->
                    <!-- no slide -->
                    <div class="news-widget-1 no-slide ">
                        <div class="featured-post">
                            <div class="align-left"><img width="300" height="200" src="/public/assets/images/default.jpg" class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương" srcset="http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dot-nhap-buoi-chup-hinh-thoi-trang-cua-stylist-chuyen-nghiep-2-1468423712891-300x200.jpg 300w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dot-nhap-buoi-chup-hinh-thoi-trang-cua-stylist-chuyen-nghiep-2-1468423712891-180x120.jpg 180w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dot-nhap-buoi-chup-hinh-thoi-trang-cua-stylist-chuyen-nghiep-2-1468423712891.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"></div> <a class="news-title" href="indexcf9a.html?p=248">Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương</a>
                        </div>
                        <div class="featured-post">
                            <div class="align-left"><img width="300" height="200" src="/public/assets/wp-content/uploads/2017/09/dien-do-nam-moi-chang-lo-loi-mot-voi-7-xu-huong-tiep-tuc-lan-san-thoi-trang-2017_11-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương" srcset="http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dien-do-nam-moi-chang-lo-loi-mot-voi-7-xu-huong-tiep-tuc-lan-san-thoi-trang-2017_11-300x200.jpg 300w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dien-do-nam-moi-chang-lo-loi-mot-voi-7-xu-huong-tiep-tuc-lan-san-thoi-trang-2017_11-180x120.jpg 180w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dien-do-nam-moi-chang-lo-loi-mot-voi-7-xu-huong-tiep-tuc-lan-san-thoi-trang-2017_11.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"></div> <a class="news-title" href="index8cf0.html?p=247">Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương</a>
                        </div>
                        <div class="featured-post">
                            <div class="align-left"><img width="300" height="200" src="/public/assets/wp-content/uploads/2017/09/a0928501a9-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương" srcset="http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/a0928501a9-300x200.jpeg 300w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/a0928501a9-180x120.jpeg 180w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/a0928501a9.jpeg 600w" sizes="(max-width: 300px) 100vw, 300px"></div> <a class="news-title" href="index88a0.html?p=246">Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương</a>
                        </div>
                        <div class="featured-post">
                            <div class="align-left"><img width="300" height="200" src="/public/assets/wp-content/uploads/2017/09/5ea827ea78c29d4ba642975e0dbbab144d3de939-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương" srcset="http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/5ea827ea78c29d4ba642975e0dbbab144d3de939-300x200.jpg 300w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/5ea827ea78c29d4ba642975e0dbbab144d3de939-180x120.jpg 180w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/5ea827ea78c29d4ba642975e0dbbab144d3de939.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"></div> <a class="news-title" href="index5a6a.html?p=192">Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương</a>
                        </div>
                        <div class="featured-post">
                            <div class="align-left"><img width="300" height="200" src="/public/assets/images/default.jpg" class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương" srcset="http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dot-nhap-buoi-chup-hinh-thoi-trang-cua-stylist-chuyen-nghiep-2-1468423712891-300x200.jpg 300w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dot-nhap-buoi-chup-hinh-thoi-trang-cua-stylist-chuyen-nghiep-2-1468423712891-180x120.jpg 180w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dot-nhap-buoi-chup-hinh-thoi-trang-cua-stylist-chuyen-nghiep-2-1468423712891.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"></div> <a class="news-title" href="indexbbbf.html?p=191">Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương</a>
                        </div>
                    </div>
                    <!-- has slide -->
                </div>
            </aside>

        </div>
        <!-- #layout -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->

</div>