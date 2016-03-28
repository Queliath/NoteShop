<div id="menu_block" class="col-sm-9 row hidden-xs">
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/product/index" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/product/index' || Yii::app()->request->url === Yii::app()->request->baseUrl.'/'){ echo 'selected'; } ?> "><h4>КАТАЛОГ</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/product/create" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/product/create'){ echo 'selected'; } ?> "><h4>НОВЫЙ ТОВАР</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/order/index" class="menu_item col-xs-2 <?php if(Yii::app()->request->url === Yii::app()->request->baseUrl.'/order/index'){ echo 'selected'; } ?> "><h4>ЗАКАЗЫ</h4></a>
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout" class="menu_item col-xs-2"><h4>ВЫХОД (<?php echo Yii::app()->user->name; ?>)</h4></a>
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