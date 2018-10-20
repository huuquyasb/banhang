 <!-- card -->
     
    



      <div id="content" class="site-content" style="    margin-bottom: 50px;">

<div class="breadcrumbs">
    <div class="container">
        <div class="row" <span><span><a href="#" >Trang chủ</a> » <span class="breadcrumb_last">Giỏ hàng</span></span>
            </span>
        </div>
    </div>
</div>
<div class="containers">
    <div class="rows">
        <div id="layout" class="clearfix sidebar-left">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <h1 class="heading"><span>Giỏ hàng</span></h1>
                    <div class="entry-content">
                      
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div role="form" class="wpcf7" id="wpcf7-f6-p15-o1" lang="vi" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                   
                                    <form method="post" action="index.php?controller=cart&act=update">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th scope="col">STT</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col" class="text-center">Số lượng</th>
                    <th scope="col" class="text-right">Giá</th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $sum = 0;
                if(isset($_SESSION["cart"]) && count($_SESSION["cart"])>0){
                  $i = 0;
                foreach ($_SESSION["cart"] as $product) {
                      $i++;
                      $sum += (int) $product["c_price"];
                 ?>
                  <tr>
                  <td><?php echo $i;?></td>
                    <td><img src="public/upload/product/<?php echo $product["c_img"] ?>" style="width: 50px" /></td>
                    <td><?php echo $product["c_name"];?></td>
                    <td><input class="form-control" type="number" value="<?php echo $product["number"];?>" name="product_<?php echo $product["pk_product_id"]; ?>" /></td>
                    <td class="text-right"><?php echo number_format($product["c_price"]);?></td>
                    <td class="text-right"><a class="btn btn-sm btn-danger" href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"] ?>"><i class="fa fa-trash"></i> </button></td>
                  </tr>
                <?php }
                }else{
                  ?>
                   <tr>
                       <td colspan="6">Giỏ hàng đang trống</td>
                   </tr>
                  <?php
                } ?>
                 
                
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>Tổng số tiền</strong></td>
                    <td class="text-right"><?php echo number_format($sum);?> VNĐ</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col mb-2">
            <div class="row">
              <div class="col-md-12 col-sm-6 text-right">
                 <a href="/" class="btn btn-primary">Tiếp tục mua</a> 
                 <input type="submit" name="" class="btn btn-info" value="Cập nhật">
                 <a class="btn btn-warning" href="index.php?controller=cart&act=destroy">Làm mới giỏ hàng</a><a href="index.php?controller=checkout" class="btn btn-danger">Mua ngay</a> </div>
            </div>
          </div>
        </div>
      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>

                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->

            <aside id="secondary-1" class="sidebar widget-area">
                <div id="nav_menu-3" class="widget widget_nav_menu">
                    <h3 class="widget-title">Danh mục sản phẩm</h3>
                    <div class="menu-danh-muc-san-pham-container">
                        <ul id="menu-danh-muc-san-pham" class="menu">
                            <li id="menu-item-342" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-342"><a href="index9864.html?product_cat=hang-moi-ve">Hàng mới về</a></li>
                            <li id="menu-item-215" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-215"><a href="index6785.html?product_cat=san-pham">Sản phẩm</a>
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

                    <div class="prdctfltr_wc prdctfltr_woocommerce woocommerce prdctfltr_wc_widget pf_default prdctfltr_always_visible prdctfltr_click_filter prdctfltr_rows prdctfltr_scroll_default prdctfltr_disable_bar pf_mod_multirow prdctfltr_checkbox prdctfltr_hierarchy_circle prdctfltr_tabbed_selection prdctfltr_selected_reorder pf_remove_clearall" data-loader="css-spinner-full-01" data-id="prdctfltr-5b7d455f82b54">

                        <div class="prdctfltr_add_inputs">
                            <input type="hidden" name="page_id" value="15" /> </div>


                    </div>

                </div>
                <div id="support_online-2" class="widget support-online-widget">
                    <h3 class="widget-title">Hỗ trợ trực tuyến</h3>
                    <div id="supporter-info" class="gd_support_1">
                        <div id="support-1" class="supporter">
                            <div class="info">
                                <div class='img_suport'><img src='/public/assets/wp-content/uploads/2018/06/2a.jpg'></div>
                                <div class="support-rt"><span class="name-support">Hà Quỳnh</span><span class="phone-support phone-support_2 phone_support_3"><a href= tel:0905.356.356 >0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-2" class="supporter">
                            <div class="info">
                                <div class='img_suport'><img src='/public/assets/wp-content/uploads/2018/06/1a.jpg'></div>
                                <div class="support-rt"><span class="name-support">Mai Hoa</span><span class="phone-support phone-support_2 phone_support_3"><a href= tel:0905.356.356 >0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-3" class="supporter">
                            <div class="info">
                                <div class='img_suport'><img src='/public/assets/wp-content/uploads/2018/06/1a.jpg'></div>
                                <div class="support-rt"><span class="name-support">Hà Quỳnh</span><span class="phone-support phone-support_2 phone_support_3"><a href= tel:0905.356.356 >0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-4" class="supporter">
                            <div class="info">
                                <div class='img_suport'><img src='/public/assets/wp-content/uploads/2018/06/2a.jpg'></div>
                                <div class="support-rt"><span class="name-support">Mai Hoa</span><span class="phone-support phone-support_2 phone_support_3"><a href= tel:0905.356.356 >0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                        <div id="support-5" class="supporter">
                            <div class="info">
                                <div class='img_suport'><img src='/public/assets/wp-content/uploads/2018/06/1a.jpg'></div>
                                <div class="support-rt"><span class="name-support">Hà Quỳnh</span><span class="phone-support phone-support_2 phone_support_3"><a href= tel:0905.356.356 >0905.356.356</a></span></div>
                            </div>
                        </div>
                        <!-- end supporter -->
                    </div>
                    <!-- end supporter-info -->
                </div>
               
            </aside>

        </div>
        <!-- #layout -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->

</div>
<!-- #content -->