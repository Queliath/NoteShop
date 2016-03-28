<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="order_block">

    <div class="half_block">

        <h4><?php echo $data->name; ?>, <?php echo $data->tel; ?></h4>

        <ul>
            <li><?php echo $data->getAttributeLabel('pay_type'); ?>: <?php echo Lookup::item('PayType',$data->pay_type); ?></li>
            <li><?php echo $data->getAttributeLabel('delivery_type'); ?>: <?php echo Lookup::item('DeliveryType',$data->delivery_type); ?></li>
        </ul>

    </div>

    <div class="half_block">

        <h4>Список товаров</h4>

        <ul class="products_in_order">

            <?php
            foreach($data->products as $product)
            {
                echo '<li>'.$product->brand.' '.$product->model.' - $'.$product->price.'</li>';
            }
            ?>

        </ul>

    </div>

    <div class="cleaner"></div>

    <a href="<?php echo Yii::app()->request->baseUrl; ?>/order/delete/<?php echo $data->id; ?>">Удалить</a>

</div>