
<div id="search_block">

    <div id="search_panel" class="row">

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'filter-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
            'method'=>'get',
        )); ?>

        <div id="brand_select_block" class="col-xs-6 col-sm-4 col-md-3">

            <h4 data-block="brand_select_block">Бренд</h4>

            <div class="options_block" data-visible="1">

                <?php echo $form->checkBoxList($model,'brand',Lookup::items('BrandType')); ?>

            </div>

        </div>

        <div id="screen_select_block" class="col-xs-6 col-sm-4 col-md-3">

            <h4 data-block="screen_select_block">Экран</h4>

            <div class="options_block" data-visible="1">

                <?php echo $form->checkBoxList($model,'screen',Lookup::items('ScreenType')); ?>

            </div>

        </div>

        <div id="cpu_select_block" class="col-xs-6 col-sm-4 col-md-3">

            <h4 data-block="cpu_select_block">Процессор</h4>

            <div class="options_block" data-visible="1">

                <?php echo $form->checkBoxList($model,'cpu',Lookup::items('CpuType')); ?>

            </div>

        </div>

        <div id="ram_select_block" class="col-xs-6 col-sm-4 col-md-3">

            <h4 data-block="ram_select_block">Оперативная память</h4>

            <div class="options_block" data-visible="1">

                <?php echo $form->checkBoxList($model,'ram',Lookup::items('RamType')); ?>

            </div>

        </div>

        <div id="os_select_block" class="col-xs-6 col-sm-4 col-md-3">

            <h4 data-block="os_select_block">Операционная система</h4>

            <div class="options_block" data-visible="1">

                <?php echo $form->checkBoxList($model,'os',Lookup::items('OsType')); ?>

            </div>

        </div>

        <div id="price_select_block" class="col-xs-6 col-sm-4 col-md-3">

            <h4 data-block="price_select_block">Цена</h4>

            <div class="options_block" data-visible="1">

                <?php echo $form->textField($model,'min_price',array('placeholder'=>'От')); ?>
                <?php echo $form->textField($model,'max_price',array('placeholder'=>'До')); ?>

                <?php echo $form->error($model,'min_price'); ?>
                <?php echo $form->error($model,'max_price'); ?>

                <div class="cleaner"></div>

            </div>

        </div>

        <div id="filter_button_block" class="col-xs-12">

            <?php echo CHtml::submitButton('Подобрать'); ?>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/product/index">Сбросить фильтры</a>

        </div>

        <?php $this->endWidget(); ?>

    </div>

</div><!-- form -->