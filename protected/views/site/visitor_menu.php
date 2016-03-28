<div id="menu_block" class="col-sm-9 row hidden-xs">
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/product/index" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/product/index' || Yii::app()->request->url === Yii::app()->request->baseUrl.'/'){ echo 'selected'; } ?> "><h4>КАТАЛОГ</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/delivery" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/site/delivery'){ echo 'selected'; } ?> "><h4>ДОСТАВКА</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/payment" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/site/payment'){ echo 'selected'; } ?> "><h4>ОПЛАТА</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/guarantee" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/site/guarantee'){ echo 'selected'; } ?> "><h4>ГАРАНТИЯ</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contacts" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/site/contacts'){ echo 'selected'; } ?> "><h4>КОНТАКТЫ</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/site/login'){ echo 'selected'; } ?> "><h4>ВХОД</h4></a>
</div>
<div id="show_menu_block" class="col-xs-6 hidden-sm hidden-md hidden-lg">
    <div id="show_menu_button" class="header_button">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_icon.png">
        <h4>Меню</h4>
        <div id="menu_list">
            <ul>
                <li <?php if(Yii::app()->request->url === '/product/index'){ echo 'class="selected"'; } ?> ><a href="/product/index">Каталог</a></li>
                <li <?php if(Yii::app()->request->url === '/site/delivery'){ echo 'class="selected"'; } ?> ><a href="/site/delivery">Доставка</a></li>
                <li <?php if(Yii::app()->request->url === '/site/payment'){ echo 'class="selected"'; } ?> ><a href="/site/payment">Оплата</a></li>
                <li <?php if(Yii::app()->request->url === '/site/guarantee'){ echo 'class="selected"'; } ?> ><a href="/site/guarantee">Гарантия</a></li>
                <li <?php if(Yii::app()->request->url === '/site/contacts'){ echo 'class="selected"'; } ?> ><a href="/site/contacts">Контакты</a></li>
                <li <?php if(Yii::app()->request->url === '/site/contacts'){ echo 'class="selected"'; } ?> ><a href="/site/contacts">Контакты</a></li>
                <li <?php if(Yii::app()->request->url === '/site/contacts'){ echo 'class="selected"'; } ?> ><a href="/site/contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
    <div id="close_menu_space"></div>
</div>
<div id="show_basket_block" class="col-xs-6 col-sm-3">
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/basket/index" id="basket_button_block" class="header_button">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/basket.png">
        <h4>Корзина(<span><?php echo Yii::app()->shoppingCart->getItemsCount(); ?></span>)</h4>
    </a>
</div>