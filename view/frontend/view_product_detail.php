  <!-- product detail -->
    <?php 

     ?>




<div id="content" class="site-content">

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
          <span>
            <a href="/" >Trang chủ</a> » </span>
            <a href="#" >Sản phẩm</a> »
             <span class="breadcrumb_last"><?php echo $product->c_name ?>
            </span>
          </span>
           
        </div>
    </div>
</div>
<div class="containers">
    <div class="rows">
        <div id="layout" class="clearfix no-sidebar">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div id="product-286" class="product">

                        <div class="row">

                            <div class="col-xs-12">

                                <div class="rt_woocommerce-product-gallery">
                                    <figure class="rt-woocommerce-product-gallery-figure">
                                        <div class="vertival">
                                            <img class="xzoom" id="xzoom-default" src="/public/upload/product/<?php echo $product->c_img; ?>">
                                        </div>
                                        <div class="xzoom-thumbs">
                                            <div class="rt-woocommerce-product-image-simple">
                                                <a href="/public/upload/product/<?php echo $product->c_img; ?>">
                                                    <img class="xzoom" src="/public/upload/product/<?php echo $product->c_img; ?>">
                                                </a>
                                            </div>
                                          
                                        </div>
                                    </figure>
                                    <script type="text/javascript">
                                        jQuery("document").ready(function($) {
                                            jQuery(".xzoom").xzoom({
                                                tint: '#333',
                                                Xoffset: 15
                                            });
                                        });
                                    </script>
                                </div>

                                <div class="rt-summary entry-summary">

                                    <h1 class="product_title entry-title"><?php echo $product->c_name ?> </h1>
                                    <ul class='attribute-single number-one'>
                                        <li class="sku_wrapper">
                                            <span class="left">
Mã:          </span>
                                            <span class="right" itemprop="sku">
A0001-3-7-1-1          </span>
                                        </li>
                                    </ul>
                                    <div class="rt_woocommerce_single_product_summary clearfix">
                                        <div class="">
                                            <p class="price_single_pro"><span class='price_pro'>Giá bán : <label><?php echo number_format($product->c_price); ?> VNĐ </label></span> </p>
                                        </div>
                                    </div>
                                    <div class='box_map_sale'>
                                        <div class="map_pro">
                                            <div class="map_items">
                                                <a href="#">Chỉ đường đến ANT</a>
                                            </div>
                                            <div class="map_items">
                                                <a href="##">Hướng dẫn mua hàng</a>
                                            </div>
                                            <div class="map_items">
                                                <a href="###">Giao hàng toàn quốc</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <!-- <div class="quantity_wanted_p">
                                            <div class="quantity">
                                                <label for="quantity-detail" class="quantity-selector slg_g">Số lượng</label>
                                                <a class="btn_num button_qty" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;" type="button">-</a>
                                                <input id="qty" type="text" class="input-text qty text" name="quantity" value="1" title="SL">
                                                <a class="btn_num button_qty" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" type="button">+</a>
                                            </div>
                                        </div> -->

                                        <button onclick="window.location.href = 'index.php?controller=cart&act=add&id=<?php echo $id; ?>';" type="button" name="add-to-cart" value="286" class="rt_qv_btn">MUA NGAY
                                            <div class="cart_text">Giao hàng tận nơi toàn quốc</div>
                                      </button>

                                    </form>

                                    <div class="purchase_address">
                                        <h5 class="time_word">Giờ làm việc: 8h00-20h00 (Tất cả các ngày)</h5>
                                        <h4 class="address_title">Địa chỉ mua hàng</h4>
                                        <div class="address_item">
                                            <span>Showroom 01 -	</span> Số 356 Bạch Mai, Hai Bà Trưng, Hà Nội </div>
                                        <div class="address_item">
                                            <span>Showroom 02 -	</span> Tầng 3, C14 Bắc Hà, Tố Hữu (Lê Văn Lương kéo dài) </div>
                                        <div class="address_item">
                                            <span>Showroom 03 -	</span> Tầng 3, C14 Bắc Hà, Tố Hữu (Lê Văn Lương kéo dài) </div>
                                    </div>

                                </div>

                            </div>
                            <!-- .col-xs-12 -->

                        </div>

                    </div>
                    <!-- .summary -->

                    <div class="post-286 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock sale shipping-taxable purchasable product-type-simple">

                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="rt_woocommerce_tabs wc-tabs list-unstyled clearfix" role="tablist">
                                <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                    <a href="#tab-description">Thông tin sản phẩm</a>
                                </li>
                                <!-- <li class="description2_tab" id="tab-title-description2" role="tab" aria-controls="tab-description2">
                                    <a href="#tab-description2">Thông số kỹ thuật</a>
                                </li> -->
                            </ul>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                <p>
                                <?php echo $product->c_content ?>
                                </p>
                                <div class="rt-social"><a class="rt-link rt-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang" target="_blank">Facebook</a><a class="rt-link rt-twitter" href="https://twitter.com/intent/tweet?text=DH927%20%c4%90%e1%ba%a7m%20su%c3%b4ng%20n%c6%a1%20ruy%20b%c4%83ng&amp;url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang&amp;via=rt" target="_blank">Twitter</a><a class="rt-link rt-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang" target="_blank">Google+</a><a class="rt-link rt-pinterest" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang&amp;media=http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/phong-cach-thoi-thuong-cua-tin-do-thoi-trang-viet-ngay-giao-mua-37-.8058.jpg&amp;description=DH927%20%c4%90%e1%ba%a7m%20su%c3%b4ng%20n%c6%a1%20ruy%20b%c4%83ng" data-pin-custom="true" target="_blank">Pin It</a></div>
                            </div>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description2 panel entry-content wc-tab" id="tab-description2" role="tabpanel" aria-labelledby="tab-title-description2">
                            </div>
                        </div>

                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "../../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-comments" data-href="http://khomaudepraothue.com/fashion2/?product=dh927-dam-suong-no-ruy-bang" data-width="100%" data-numposts="5" data-colorscheme="light"></div>

                        <div class="related">

                            <h3 class="headingss">Sản phẩm liên quan</h3>

                            <ul class="list-unstyled row product-style rt-view grid">

                                <li class="col-lg-3 lg-4-cl col-md-3 md-4-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl post-280 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock shipping-taxable purchasable product-type-simple">
                                    <div class="product_item">
                                        <div class='rt-thumb'>
                                            <a class='rt-tooltip' data-tooltip='{"image": "http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/20160215-032929-9_600x600.jpg"}' href='indexace3.html?product=dh927-dam-suong-no-ruy-bang-3'><img width="600" height="600" src="/public/assets/wp-content/uploads/2018/06/20160215-032929-9_600x600.jpg" class="attachment-600x0 size-600x0 wp-post-image" alt="Với váy suông không thể giúp bạn gái khoe ngực đầy, eo thon hay vòng 3 quyến rũ. Nhưng bù lại với những cô nàng có vòng 2 không thon gọn, vòng 1 khiêm tốn và vòng 3 thiếu gợi cảm thì sẽ biến mất trong chiếc đầm suông và nó dồn tất cả sự chú ý vào khuôn mặt và đôi chân thon của người mặc." srcset="http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/20160215-032929-9_600x600.jpg 600w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/20160215-032929-9_600x600-150x150.jpg 150w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/20160215-032929-9_600x600-300x300.jpg 300w, http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/20160215-032929-9_600x600-180x180.jpg 180w" sizes="(max-width: 600px) 100vw, 600px" /></a>
                                            <input type="hidden" class="xcp-hidden-id" value="280">
                                            <div class="rt_add_to_cart clearfix">
                                                <a href="indexace3.html?product=dh927-dam-suong-no-ruy-bang-3" class="view_product"><i class="fa fa-search-plus"></i></a>

                                                <a rel="nofollow" href="index7013.html?product=dh927-dam-suong-no-ruy-bang&amp;add-to-cart=280" data-quantity="1" data-product_id="280" data-product_sku="A0001-3-7-1-3" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Đặt mua</a></div>
                                        </div>
                                        <div class="content">
                                            <h3><a href="indexace3.html?product=dh927-dam-suong-no-ruy-bang-3" class="rt_woocommerce_title">DH927 Đầm suông nơ ruy băng</a></h3>
                                            <div class='star_pro'> <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                            </div>
                                            <p class="price"><span>Giá : 1.450.000 đ</span></p>
                                            <div class='des_pro_ex'>
                                                <h3>Mô tả ngắn </h3>
                                                <div class="woocommerce-product-details__short-description">
                                                    <p>Với váy suông không thể giúp bạn gái khoe ngực đầy, eo thon hay vòng 3 quyến rũ. Nhưng bù lại với những cô nàng có vòng 2 không thon gọn, vòng 1 khiêm tốn và vòng 3 thiếu gợi cảm thì sẽ biến mất trong chiếc đầm suông và nó dồn tất cả sự chú ý vào khuôn mặt và đôi chân thon của người mặc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                               

                            

                            </ul>

                        </div>

                    </div>

                    <div class="devvn-popup-quickbuy" data-popup="popup-quickbuy" id="popup_content_286">
                        <div class="devvn-popup-inner">
                            <div class="devvn-popup-title">
                                <span>Đặt mua DH927 Đầm suông nơ ruy băng</span>
                                <button type="button" class="devvn-popup-close"></button>
                            </div>
                            <div class="devvn-popup-content devvn-popup-content_286 ">
                                <div class="devvn-popup-content-left ">
                                    <div class="devvn-popup-prod">
                                        <div class="devvn-popup-img"><img src="/public/assets/wp-content/uploads/2018/06/phong-cach-thoi-thuong-cua-tin-do-thoi-trang-viet-ngay-giao-mua-37-.8058-180x180.jpg" alt="" /></div>
                                        <div class="devvn-popup-info">
                                            <span class="devvn_title">DH927 Đầm suông nơ ruy băng</span>
                                            <span class="devvn_price"><del><span class="woocommerce-Price-amount amount">1.450.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                            </del> <ins><span class="woocommerce-Price-amount amount">1.400.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                        </div>
                                    </div>
                                    <div class="devvn_prod_variable" data-simpleprice="1400000">

                                        <form class="cart" method="post" enctype='multipart/form-data'>
                                            <div class="quantity">
                                                <div class="qty-adjust">
                                                    <a class="bt-ct qty-minus" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                                    <input type="number" step="1" min="1" name="quantity" value="1" title="SL" class="input-text qty text" size="4" />
                                                    <a class="bt-ct qty-plus" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <button type="submit" name="add-to-cart" value="286" class="single_add_to_cart_button button alt">Mua ngay</button>

                                        </form>

                                    </div>
                                    Bạn vui lòng nhập đúng số điện thoại để chúng tôi sẽ gọi xác nhận đơn hàng trước khi giao hàng. Xin cảm ơn! </div>
                                <div class="devvn-popup-content-right">
                                    <form class="devvn_cusstom_info" id="devvn_cusstom_info" method="post">
                                        <div class="popup-customer-info">
                                            <div class="popup-customer-info-title">Thông tin người mua</div>
                                            <div class="popup-customer-info-group popup-customer-info-radio">
                                                <label>
                                                    <input type="radio" name="customer-gender" value="1" checked/>
                                                    <span>Anh</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="customer-gender" value="2" />
                                                    <span>Chị</span>
                                                </label>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-2">
                                                    <input type="text" class="customer-name" name="customer-name" placeholder="Họ và tên">
                                                </div>
                                                <div class="popup-customer-info-item-2">
                                                    <input type="text" class="customer-phone" name="customer-phone" placeholder="Số điện thoại">
                                                </div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1">
                                                    <input type="text" class="customer-email" name="customer-email" data-required="false" placeholder="Địa chỉ email (Không bắt buộc)">
                                                </div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1">
                                                    <textarea class="customer-address" name="customer-address" placeholder="Địa chỉ nhận hàng (Không bắt buộc)"></textarea>
                                                </div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1">
                                                    <textarea class="order-note" name="order-note" placeholder="Ghi chú đơn hàng (Không bắt buộc)"></textarea>
                                                </div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1 popup_quickbuy_shipping">
                                                    <div class="popup_quickbuy_shipping_title">Tổng:</div>
                                                    <div class="popup_quickbuy_total_calc"></div>
                                                </div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1">
                                                    <button type="button" class="devvn-order-btn">Đặt hàng ngay</button>
                                                </div>
                                            </div>
                                            <div class="popup-customer-info-group">
                                                <div class="popup-customer-info-item-1">
                                                    <div class="devvn_quickbuy_mess"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="prod_id" id="prod_id" value="286">
                                        <input type="hidden" name="prod_nonce" id="prod_nonce" value="">
                                        <input type="hidden" name="enable_ship" id="enable_ship" value="">
                                        <input name="require_address" id="require_address" type="hidden" value="0" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>

        </div>
        <!-- #layout -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->

</div>
<!-- #content -->