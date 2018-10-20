
<div id="content" class="site-content">

    <div class="breadcrumbs">
        <div class="container">
            <div class="row" <span><span><a href="/" >Trang chủ</a> » <span class="breadcrumb_last">Tin tức</span></span>
                </span>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="rows">
            <div id="layout" class="clearfix sidebar-left">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="rt-news-style-1">
                            <h1 class="heading"><span>Tin tức</span></h1>
                            <div class="new-list">
                            <?php 
                                foreach($arr as $rows)
                                {
                            ?>
                                <div class="news-post clearfix">
                                  
                                    <div class="rt-post-image">
                                        <a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>" title="">
                                        <?php if(file_exists("public/upload/news/".$rows->c_img)){ ?>
                                            <img width="300" height="200" src="/public/upload/news/<?php echo $rows->c_img; ?>" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                                        <?php }else{ ?> 
                                            <img width="300" height="200" src="/public/assets/images/default.jpg" class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương"/> </a>
                                        <?php } ?>
                                           
                                        <div class="overlay">
                                            <div class="texts">
                                                <a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>"><i class="fa fa-eye"></i><br>Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rt-post-content">
                                        <h3><a class="title" href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>" title=""><?php echo $rows->c_name; ?></a></h3>
                                        <p><?php echo split_words($rows->c_description,500); ?><a class='more-link' href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>">Đọc Thêm</a></p>
                                        <div class="rt-post-info"><span class="rt-post-archive">
                                        <i class="fa fa-folder-o" aria-hidden="true"></i> 
                                        <a href="index.php?controller=news&id=<?php echo $rows->fk_category_news_id; ?>"> | <?php echo $rows->cate_name; ?></a></span>
                                        
                                        <span class="rt-post-time">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date('d/m/Y', strtotime($rows->created_at)); ?> </span>
                                        <span><i class="fa fa-eye"></i>  lượt xem: <?php echo $rows->viewed;?></span>
                                        <span class="rt-post-time"><i class="fa fa-book"></i>
                                        <a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>"> Đọc thêm </a></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            
                                <div class="wp-pagenavi">
                      
                                  <ul class="page-numbers">
                                    <?php 
                                    for ($i=1; $i<=$num_page; $i++) {
                                    ?>
                                         <li><a class="page-numbers" href="index.php?controller=news&p=<?php echo $i; ?>"><?php  echo $i; ?></a></li>
                                    <?php
                                    } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End #news-wrap-->
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