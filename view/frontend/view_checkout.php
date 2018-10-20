<div id="content" class="site-content" style="    margin-bottom: 50px;">

    <div class="breadcrumbs">
        <div class="container">
            <div class="row" <span><span><a href="#" >Trang chủ</a> » <span class="breadcrumb_last">Thông tin giao hàng</span></span>
                </span>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="rows">
            <div id="layout" class="clearfix sidebar-left">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <h1 class="heading"><span>Thông tin giao hàng</span></h1>
                        <div class="entry-content">
                        <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div class="row">
                            <div class="col-md-6">
                                    <div role="form" class="wpcf7" id="wpcf7-f6-p15-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                      
                                                 <input type="hidden" name="form_type" value="contact" />
                                            <div class="form-lienhe">
                                                <p><span class="wpcf7-form-control-wrap text-244"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tên của bạn" required/></span></p>
                                                <p><span class="wpcf7-form-control-wrap email-420"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" required /></span></p>
                                                <p><span class="wpcf7-form-control-wrap textarea-979"><textarea name="address" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Địa chỉ" required></textarea></span></p>
                                              
                                                
                                            </div>
                                           
                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div role="form" class="wpcf7" id="wpcf7-f6-p15-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                      
                                            <input type="hidden" name="form_type" value="contact" />
                                            <div class="form-lienhe">
             
                                                <p><span class="wpcf7-form-control-wrap email-420"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" required /></span></p>
                                                <p><span class="wpcf7-form-control-wrap text-244"><input type="text" name="client" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Mã số thuế" required/></span></p>
                                                <p><span class="wpcf7-form-control-wrap textarea-979"><textarea name="note" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Ghi chú" required></textarea></span></p>
                                                <div class="wpcf7-response-output " style="color:green;">
                                                    <?php 
                                                    if(isset($msg) && $msg !=''){
                                                        echo $msg;
                                                    }
                                                    ?>
                                                </div>
                                                <div class="wpcf7-response-output " style="color:red;">
                                                    <?php 
                                                    if(isset($err) && $err !=''){
                                                        echo $err;
                                                    }
                                                    ?>
                                                </div>
                                                <p>
                                                    <input type="submit" value="Gửi" class="wpcf7-form-control wpcf7-submit" />
                                                </p>
                                            </div>
                                           
                                      
                                    </div>
                                </div>
                                </form>
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
                   
                   
                </aside>

            </div>
            <!-- #layout -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->

</div>
<!-- #content -->