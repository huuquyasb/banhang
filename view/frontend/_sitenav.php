<div class="site site-container full w1170">
        <header class="site-header" role="banner">

            <div class="rt-header">
                <div class="container">
                    <div id="rt-widget-text-4" class="widget rt_widget rt_textwidget">
                        <div class="classic-text-widget"><span><i class="fa fa-envelope"></i> Email: ellla_moda@holalady.com</span>
                            <a href="tel:0986 866 266"><i class="fa fa-phone"></i> Hotline: 0986 866 266</a>
                        </div>
                    </div>
                    <div class="search-cart">
                        <form role="search" method="get" class="woocommerce-product-search" action="">
                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm cho:</label>
                            <input type="search" id="key" class="search-field" placeholder="Tìm kiếm..." value="" name="s" />
                            <button onclick="search()" type="button" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text">Search</span></button>
                            <input type="hidden" name="post_type" value="product" />
                        </form>
                        <script type="text/javascript">
                            function search()
                            {
                                var key=document.getElementById("key").value;
                                //di chuyen den trang tim kiem
                                location.href="index.php?controller=search&key="+key;
                            }
                        </script>
                        <div class="cart-icon-cart">
                            <div class="shop-cart">
                                <a class="cart-contents" href="index.php?controller=cart" title="View your shopping cart">
                                    <?php 
                                     if(isset($_SESSION["cart"])){
                                        echo count($_SESSION["cart"]);
                                     }else{
                                       echo '0';
                                     }
                                    ?>
                                </a>
                                <div class="shop-item">
                                    <div class="widget_shopping_cart_content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-header fix-with-logo">
                <div class="site-branding">
                    <div class="container">
                        <div class="row">
                            <div class="header-layout">
                                <a href="/" title="fashion2">
                                    <img src="/public/assets/wp-content/uploads/2018/06/logo-1.png" alt="fashion2">
                                </a>
                                <h1 class="site-title hidden"><a href="/">fashion2</a></h1>
                            </div>
                            <div class="nav-layout">
                                <nav id="site-navigation" class="main-navigation">
                                    <div class="container_class">
                                        <div class="row">

                                            <!-- UberMenu [Configuration:main] [Theme Loc:primary] [Integration:auto] -->
                                            <a class="ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-black-white-2 ubermenu-loc-primary ubermenu-responsive-toggle-content-align-left ubermenu-responsive-toggle-align-full " data-ubermenu-target="ubermenu-main-22-primary-2"><i class="fas fa-bars"></i>Menu</a>
                                            <nav id="ubermenu-main-22-primary-2" class="ubermenu ubermenu-nojs ubermenu-main ubermenu-menu-22 ubermenu-loc-primary ubermenu-responsive ubermenu-responsive-default ubermenu-responsive-collapse ubermenu-horizontal ubermenu-transition-shift ubermenu-trigger-hover_intent ubermenu-skin-black-white-2 ubermenu-has-border ubermenu-bar-align-full ubermenu-items-align-auto ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-sub-indicators ubermenu-retractors-responsive ubermenu-submenu-indicator-closes">
                                                <ul id="ubermenu-nav-main-22-primary" class="ubermenu-nav">
                                                    <li id="menu-item-106" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-current-menu-item ubermenu-current_page_item ubermenu-item-home ubermenu-item-106 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="/" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Trang chủ</span></a></li>
                                                    <!-- <li id="menu-item-211" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-has-children ubermenu-item-211 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=product" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Sản phẩm</span><i class="ubermenu-sub-indicator fas fa-angle-down"></i></a>
                                                        <ul id="main_menu_ul_bk" class="ubermenu-submenu ubermenu-submenu-id-211 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-full_width ubermenu-autoclear ubermenu-submenu-bkg-img">
                                                            <li id="main_menu_li_bk" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-363 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="#"><span class="ubermenu-target-title ubermenu-target-text">Danh mục</span></a>
                                                                <ul   class="ubermenu-submenu ubermenu-submenu-id-363 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                                                                <?php //include "controller/frontend/controller_menu_category.php"; ?>
                                                                   
                                                                   
                                                                </ul>
                                                            </li>
                                                          
                                                        </ul>
                                                    </li> -->
                                                    <li id="menu-item-19" class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-19 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=product" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Sản phẩm</span></a></li>
                                                    <li id="menu-item-211" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-has-children ubermenu-item-211 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=news" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Tin tức</span><i class="ubermenu-sub-indicator fas fa-angle-down"></i></a>
                                                        <ul id="main_menu_ul_bk" class="ubermenu-submenu ubermenu-submenu-id-211 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-full_width ubermenu-autoclear ubermenu-submenu-bkg-img">
                                                            <li id="main_menu_li_bk" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-363 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="#"><span class="ubermenu-target-title ubermenu-target-text">Danh mục</span></a>
                                                                <ul   class="ubermenu-submenu ubermenu-submenu-id-363 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                                                                <?php include "controller/frontend/controller_menu_news.php"; ?>
                                                                   
                                                                   
                                                                </ul>
                                                            </li>
                                                          
                                                        </ul>
                                                    </li>
                                                   
                                                    <li id="menu-item-19" class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-19 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=contact" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Liên hệ</span></a></li>
                                                <?php 
                                                    if(isset($_SESSION["login_user"])){
                                                ?>
                                                 <li id="menu-item-19" class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-19 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=logout" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Đăng xuất</span></a></li>

                                                <?php
                                                    }else{
                                                ?>
                                                 <li id="menu-item-19" class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-19 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=login" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Đăng nhập</span></a></li>
                                                    <li id="menu-item-19" class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-19 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=signup" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Đăng Ký</span></a></li>
                                                <?php
                                                    }
                                                ?>
                                                  
                                                </ul>
                                            </nav>
                                            <!-- End UberMenu -->

                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .container -->
                                </nav>
                                <!-- #site-navigation -->
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- .site-branding -->
            </div>

        </header>
        <style>
        #main_menu_ul_bk{
            width:150px !important;
        }
        #main_menu_li_bk{
            width:100% !important;
        }
        </style>