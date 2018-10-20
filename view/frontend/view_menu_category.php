<?php 

    foreach ($category as $rows) {
        ?>
        <li id="menu-item-364"  style="width: 100%;" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-364 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="index.php?controller=product&id=<?php echo $rows->pk_category_product_id ?>"><span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->c_name; ?></a></span></a></li>
        <?php 
    }
    ?>