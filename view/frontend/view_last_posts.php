<?php 
    foreach($arr as $rows)
    {
?>
<div class="news-post col-md-4">
    <div class="box">
        <div class="post-thumbnail">
            <a href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>">
            <?php if(file_exists("public/upload/news/".$rows->c_img)){ ?>
                <img width="300" height="200" src="/public/upload/news/<?php echo $rows->c_img; ?>" sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image"/> </a>
            <?php }else{ ?> 
                <img width="300" height="200" src="/public/assets/images/default.jpg"  class="attachment-medium size-medium wp-post-image" alt="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương"/> </a>
            <?php } ?>
               
            <div class="time">
                <span><i class="fa fa-calendar"></i> Ngày đăng: <?php echo date('d/m/Y', strtotime($rows->created_at)); ?> </span> <span> <i class="fa fa-eye"></i>  lượt xem: <?php echo $rows->viewed;?></span>
            </div>
        </div>
        <div class="content">
            <a class="news-title" href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>" title="Ngắm gu thời trang đơn giản, nữ tính của Nabi Nhã Phương">
            <?php echo $rows->c_name;?>
            </a>
            <p>
            <?php echo split_words($rows->c_description,150);?>
            </br>
                <a class='more-link' href='index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>'></a>
            </p> <a class="view-link" href="index.php?controller=post&id=<?php echo $rows->pk_news_id; ?>">Xem chi tiết</a>
        </div>
    </div>
</div>
<?php } ?>