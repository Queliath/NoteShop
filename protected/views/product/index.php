<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = Yii::app()->name . ' - Каталог';
?>

<?php
$this->renderPartial('filter_form', array('model'=>$filterForm));
?>

<div id="catalog_block" class="row">
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        'template'=>'{items}{pager}',
        'ajaxUpdate'=>false,
    )); ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/addToBasket.js"></script>
