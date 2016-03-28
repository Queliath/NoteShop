<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="catalog_item_block col-xs-12 col-sm-3">

    <div class="catalog_item" data-product_id="<?php echo $data->id; ?>">

        <img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $data->image_source; ?>">

        <a href="<?php echo Yii::app()->request->baseUrl; ?>/product/view/<?php echo $data->id; ?>"><h4><?php echo $data->brand; ?> <?php echo $data->model; ?></h4></a>

        <p>
            Экран <?php echo $data->screen_diagonal; ?>" <?php echo $data->screen_desc; ?> /
            <?php echo $data->cpu; ?> /
            RAM <?php echo $data->ram; ?> ГБ /
            HDD <?php echo $data->hdd; ?> ГБ /
            <?php echo $data->video_card; ?> /
            <?php echo $data->os; ?> /
            <?php echo $data->additional_desc; ?>
        </p>

        <h3>$<?php echo $data->price; ?></h3>

        <?php
        if(Yii::app()->user->isGuest)
        {
            if(Yii::app()->shoppingCart->contains($data->id))
                echo '<a class="add_to_basket added" href="#">Товар добавлен</a>';
            else
                echo '<a class="add_to_basket" href="#" data-href="'.Yii::app()->request->baseUrl.'/basket/add/'.$data->id.'">В корзину</a>';
        }
        else
            echo '<a class="update_product" href="'.Yii::app()->request->baseUrl.'/product/update/'.$data->id.'">Редактировать</a>';
        ?>

    </div>

</div>