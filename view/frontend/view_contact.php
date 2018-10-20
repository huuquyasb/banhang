<div id="content" class="site-content" style="    margin-bottom: 50px;">

    <div class="breadcrumbs">
        <div class="container">
            <div class="row" <span><span><a href="#" >Trang chủ</a> » <span class="breadcrumb_last">Liên hệ</span></span>
                </span>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="rows">
            <div id="layout" class="clearfix sidebar-left">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <h1 class="heading"><span>Liên hệ</span></h1>
                        <div class="entry-content">
                            <div class="row">
                                <div class="rt-maps col-md-12 clearfix">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.824077735873!2d105.8212667153587!3d20.999687894145076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac88ae7cea91%3A0xe01b5f33acd8b1ac!2zMzQgQ8O5IENow61uaCBMYW4sIEtoxrDGoW5nIFRydW5nLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1509952976587" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>THÔNG TIN VỀ CHÚNG TÔI</h5>
                                    <p><i class="fa fa-home"></i> Công ty CP truyền thông &amp; công nghệ Rao Thuê</p>
                                    <p><i class="fa fa-map-marker"></i> Địa chỉ: 34 Cù Chính Lan, Thanh Xuân, HN ( gần Ngã Tư Sở )</p>
                                    <p><i class="fa fa-phone-square"></i> Điện thoại : 0974.80.80.80 – 0934.600.400</p>
                                    <p><i class="fa fa-phone"></i> Tư vấn miễn phí QC google vs tối ưu web : 0986070202</p>
                                    <p><i class="fa fa-envelope-o"></i> Email : web@raothue.com – cskh@raothue.com</p>
                                    <p><i class="fa fa-globe"></i> Website : www.raothue.com</p>
                                </div>
                                <div class="col-md-6">
                                    <div role="form" class="wpcf7" id="wpcf7-f6-p15-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
                                                 <input type="hidden" name="form_type" value="contact" />
                                            <div class="form-lienhe">
                                                <span class="wpcf7-form-control-wrap text-244"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tên của bạn" required/></span></p>
                                                <p><span class="wpcf7-form-control-wrap email-420"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" required /></span></p>
                                                <p><span class="wpcf7-form-control-wrap textarea-979"><textarea name="content" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nội dung" required></textarea></span></p>
                                                <div class="wpcf7-response-output " style="color:green;">
                                                    <?php 
                                                    if(isset($msg) && $msg !=''){
                                                        echo $msg;
                                                    }
                                                    ?>
                                                </div>
                                                <p>
                                                    <input type="submit" value="Gửi" class="wpcf7-form-control wpcf7-submit" />
                                                </p>
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
                   
                   
                </aside>

            </div>
            <!-- #layout -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->

</div>
<!-- #content -->