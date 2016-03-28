<div class="basket_product" data-product_id="<?php echo $product->id; ?>">

    <img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $product->image_source; ?>">

    <a href="<?php echo Yii::app()->request->baseUrl; ?>/product/view/<?php echo $product->id; ?>"><h4><?php echo $product->brand; ?> <?php echo $product->model; ?></h4></a>

    <p>
        Экран <?php echo $product->screen_diagonal; ?>" <?php echo $product->screen_desc; ?> /
        <?php echo $product->cpu; ?> /
        RAM <?php echo $product->ram; ?> ГБ /
        HDD <?php echo $product->hdd; ?> ГБ /
        <?php echo $product->video_card; ?> /
        <?php echo $product->os; ?> /
        <?php echo $product->additional_desc; ?>
    </p>

    <a class="remove_from_basket" href="<?php echo Yii::app()->request->baseUrl; ?>/basket/delete/<?php echo $product->id; ?>">Удалить</a>

    <h3>$<span><?php echo $product->price; ?></span></h3>

    <div class="cleaner"></div>

</div>