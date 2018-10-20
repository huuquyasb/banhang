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
<!-- #content -->