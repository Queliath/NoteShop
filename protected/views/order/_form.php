<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div id="send_order_block">

    <button id="show_form_button">Оформить заказ</button>

    <div class="cleaner"></div>

    <div id="order_form_block" class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'order-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
            'action'=>Yii::app()->request->baseUrl.'/order/create',
        )); ?>

        <div id="pay_type_block">

            <h4>Способ оплаты:</h4>

            <input type="radio" name="Order[pay_type]" value="1" checked>
            <label>Наличными</label>
            <p>Оплата производится только белорусскими рублями в магазине.</p>

            <input type="radio" name="Order[pay_type]" value="2">
            <label>Через ЕРИП</label>
            <p>Комисcия +0% от стоимости заказа. После оформления заказа вы получите его уникальный номер, который нужно указать при оплате. </p>

        </div>

        <div id="delivery_type_block">

            <h4>Доставка:</h4>

            <input type="radio" name="Order[delivery_type]" value="1" checked>
            <label>Самовывоз</label>
            <p>Бесплатно. Забрать заказ можно в нашем магазине в Минске.</p>

            <input type="radio" name="Order[delivery_type]" value="2">
            <label>Доставка по Минску</label>
            <p>Стоимость — 85000 руб. Бесплатно при заказе от 1500000 руб. Доставка по Минску в течение 24-х часов.</p>

            <input type="radio" name="Order[delivery_type]" value="3">
            <label>Доставка по Беларуси</label>
            <p>Стоимость — 180000 руб. Доставка до 40 кг по Беларуси в течение 3-х дней.</p>

        </div>

        <div id="contacts_block">

            <h4>Контактные данные:</h4>

            <input name="Order[name]" type="text" placeholder="Имя" maxlength="50">
            <input name="Order[tel]" type="tel" placeholder="Номер" maxlength="50">

        </div>

        <?php echo CHtml::submitButton('Отправить'); ?>

        <?php $this->endWidget(); ?>

        <div class="cleaner"></div>

    </div>

</div>