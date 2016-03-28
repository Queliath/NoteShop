<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
    'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->label($model,'brand'); ?>
        <?php echo $form->dropDownList($model,'brand',Lookup::items('BrandType')); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'model'); ?>
        <?php echo $form->textField($model,'model',array('size'=>40,'maxlength'=>40)); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

    <?php if($model->isNewRecord):?>

	<div class="row">
		<?php echo $form->label($model,'image_source'); ?>
		<?php echo $form->fileField($model,'image_source',array('accept'=>'image/*')); ?>
	</div>

    <?php endif ?>

	<div class="row">
		<?php echo $form->label($model,'screen_diagonal'); ?>
        <?php echo $form->dropDownList($model,'screen_diagonal',Lookup::items('ScreenType')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'screen_desc'); ?>
		<?php echo $form->textField($model,'screen_desc',array('size'=>40,'maxlength'=>40)); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'cpu_type'); ?>
        <?php echo $form->dropDownList($model,'cpu_type',Lookup::items('CpuType')); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'cpu'); ?>
		<?php echo $form->textField($model,'cpu',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ram'); ?>
        <?php echo $form->dropDownList($model,'ram',Lookup::items('RamType')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hdd'); ?>
		<?php echo $form->textField($model,'hdd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_card'); ?>
		<?php echo $form->textField($model,'video_card',array('size'=>40,'maxlength'=>40)); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'os_type'); ?>
        <?php echo $form->dropDownList($model,'os_type',Lookup::items('OsType')); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'os'); ?>
		<?php echo $form->textField($model,'os',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_desc'); ?>
		<?php echo $form->textField($model,'additional_desc',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->