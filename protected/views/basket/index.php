<?php

$this->pageTitle = Yii::app()->name . ' - Корзина';

?>

<div id="basket_products_block">

    <?php
    foreach($products as $product)
    {
        $this->renderPartial('_view', array(
            'product'=>$product,
        ));
    }
    ?>

    <?php if(!Yii::app()->shoppingCart->isEmpty()):?>

    <h4 id="summary">Итого: $<span><?php echo Yii::app()->shoppingCart->getCost(); ?></span></h4>

    <?php endif ?>

</div>

<?php
if(!Yii::app()->shoppingCart->isEmpty())
    $this->renderPartial('/order/_form');
?>