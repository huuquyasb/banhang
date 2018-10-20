<div id="content" class="site-content">

    <div class="breadcrumbs">
        <div class="container">
            <div class="row" <span=""><span><a href="/">Trang chủ</a> » <span class="breadcrumb_last"><?php echo $post->c_name;?></span></span>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="rows">
            <div id="layout" class="clearfix no-sidebar">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <h1 class="headings"><?php echo $post->c_name;?></h1>
                        <div class="entry-content">
                           <?php echo $post->c_description;?>
                            <div class="rt-social"><a class="rt-link rt-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fp%3D248" target="_blank">Facebook</a><a class="rt-link rt-twitter" href="https://twitter.com/intent/tweet?text=Ng%e1%ba%afm%20gu%20th%e1%bb%9di%20trang%20%c4%91%c6%a1n%20gi%e1%ba%a3n,%20n%e1%bb%af%20t%c3%adnh%20c%e1%bb%a7a%20Nabi%20Nh%c3%a3%20Ph%c6%b0%c6%a1ng&amp;url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fp%3D248&amp;via=rt" target="_blank">Twitter</a><a class="rt-link rt-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fp%3D248" target="_blank">Google+</a><a class="rt-link rt-pinterest" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fp%3D248&amp;media=http://khomaudepraothue.com/fashion2/wp-content/uploads/2017/09/dot-nhap-buoi-chup-hinh-thoi-trang-cua-stylist-chuyen-nghiep-2-1468423712891.jpg&amp;description=Ng%e1%ba%afm%20gu%20th%e1%bb%9di%20trang%20%c4%91%c6%a1n%20gi%e1%ba%a3n,%20n%e1%bb%af%20t%c3%adnh%20c%e1%bb%a7a%20Nabi%20Nh%c3%a3%20Ph%c6%b0%c6%a1ng" data-pin-custom="true" target="_blank">Pin It</a></div>
                        </div>

                        <div class="post_tags"><span><i class="fa fa-tag"></i> Từ khóa : </span><a href="index5f4b.html?tag=u2-my" title="u2 my Tag" class="u2-my">u2 my</a> </div>
                        <!-- <div class="post_tags categories_post"><span>Thể loại : </span><a href="index3f7b.html?cat=2">Tin tức</a></div> -->
                        <div class="clear"></div>

                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "../../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-comments" data-href="http://khomaudepraothue.com/fashion2/?p=248" data-width="100%" data-numposts="5"></div>
                        <div class="clear"></div>

                        <div class="related-post">
                            <h3 class="heading-realate">Tin Liên Quan</h3>
                            <ul class="list-post-related">
                                <?php 
                                 foreach ($arr as $rows){ 
                                ?>
                                <li>
                                    <div class="img_post">
                                        <a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>" title="">
                                        <?php if(file_exists("public/upload/news/".$rows->c_img)){ ?>
                                            <img width="300" height="200" src="/public/upload/news/<?php echo $rows->c_img; ?>" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                                        <?php }else{ ?> 
                                            <img width="300" height="200" src="/public/assets/images/default.jpg" class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương"/> </a>
                                        <?php } ?>
                                    </div>
                                    <a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>" title="">
                                    <?php echo $rows->c_name; ?>
                                    </a>
                                    <h3><a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>" title=""></a><a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>"></a></h3>
                                    <p>
                                    <?php echo split_words($rows->c_description,200); ?>
                                        <br><a class="more-link" href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>">Xem thêm</a></p>
                                </li>
                                 <?php } ?>
                            </ul>
                        </div>
                        <!-- End relate -->

                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->

            </div>
            <!-- #layout -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->

</div>