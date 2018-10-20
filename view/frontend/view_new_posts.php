<div id="rt_widget_post-2" class="widget rt-widget rt-post-category">
                    <h3 class="widget-title">Tin tức mới</h3>
                    <!-- start file -->
                    <!-- no slide -->
                    <div class="news-widget-1 no-slide ">
                    <?php 
                        foreach($arr as $rows)
                        {
                        ?>
                        <div class="featured-post">
                            <div class="align-left">
                            <?php if(file_exists("public/upload/news/".$rows->c_img)){ ?>
                            <img width="300" height="200" src="/public/upload/news/<?php echo $rows->c_img; ?>">
                            <?php }else{ ?> 
                                <img width="300" height="200" src="/public/assets/images/default.jpg"  /> </a>
                          <?php } ?>
                          </div> 
                            <a class="news-title" href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>">
                            <?php echo $rows->c_name;?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- has slide -->
                </div>