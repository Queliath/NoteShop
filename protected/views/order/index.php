<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = Yii::app()->name . ' - Заказы';
?>

<div class="order_list_block">

    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        'template'=>'{items}{pager}',
    )); ?>

</div>
