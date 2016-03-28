<?php
/* @var $this ProductController */
/* @var $model Product */

$this->pageTitle = Yii::app()->name . ' - Редактирование';
?>

<div class="admin_panel">

    <h2>Редактирование товара</h2>

    <?php $this->renderPartial('_form', array('model'=>$model)); ?>

    <a href="<?php echo Yii::app()->request->baseUrl; ?>/product/delete/<?php echo $model->id; ?>">Удалить</a>

</div>