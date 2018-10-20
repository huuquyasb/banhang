
   <div id="nav_menu-3" class="widget widget_nav_menu">
        <h3 class="widget-title">Danh mục sản phẩm</h3>
        <div class="menu-danh-muc-san-pham-container">
            <ul id="menu-danh-muc-san-pham" class="menu">
                
                <?php 
                    foreach ($category as $rows) {
                ?>
                <li id="menu-item-343" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-343"><a href="index.php?controller=product&id=<?php echo $rows->pk_category_product_id ?>"><?php echo $rows->c_name; ?></a></li>
                <?php
                    }
                ?>

            </ul>
        </div>
    </div>