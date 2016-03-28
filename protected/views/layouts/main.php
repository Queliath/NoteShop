<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="ru">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">

    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<header>
    <div class="container">
        <div class="row">
            <div id="logo_block" class="col-xs-12 col-sm-6">
                <h1>NoteShop.by</h1>
                <h2>МАГАЗИН НОУТБУКОВ</h2>
            </div>
            <div id="contacts_block" class="col-sm-6 hidden-xs">
                <h3>Контактный телефон:</h3>
                <h2>(29) 556-57-88</h2>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <nav>
            <div class="row">
                <?php
                if(Yii::app()->user->isGuest)
                    $this->renderPartial('/site/visitor_menu');
                else
                    $this->renderPartial('/site/admin_menu');
                ?>
            </div>
        </nav>

        <div id="content" class="row">

            <section class="col-xs-12 col-md-9">
                <?php echo $content; ?>
            </section>

            <aside class="col-md-3 hidden-xs hidden-sm">
                <div id="categories_block">
                    <div class="title_block">
                        <h2>ПОЧЕМУ ИМЕННО МЫ?</h2>
                    </div>
                    <ul>
                        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/category.jpg">Адекватные цены</li>
                        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/category.jpg">Качественный сервис</li>
                        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/category.jpg">Гарантии на товар</li>
                        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/category.jpg">Доставка по Беларуси</li>
                        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/category.jpg">Большой ассортимент</li>
                        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/category.jpg">Постоянные посутпления</li>
                        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/category.jpg">Хорошие отзывы покупателей</li>
                    </ul>
                </div>
                <div id="discounts_block">
                    <div class="title_block">
                        <h2>ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h2>
                    </div>
                    <div class="comment_block">
                        <p>
                            Купил в рассрочку на пол года компьютер Lenovo через ваш магазин.
                            Отличная консультация менеджера и людей, которые занимаются оформлением
                            заявки на месте. Предварительно по телефону уточнил детали, на месте
                            еще раз переспросил и удостоверился, что информация на сайте
                            соответствует. Спасибо.
                        </p>
                        <h6>Виталий.</h6>
                    </div>
                    <div class="comment_block">
                        <p>
                            Хороший магазин. Доброжелательный персонал, квалифицированная консультация.
                            Выбрал с помощью продавца ноутбук для игр, в магазине посоветовали и
                            рассказали о ноутбуке Asus F555LB. Выбором ноутбука и условиями работы
                            доволен. Так держать.
                        </p>
                        <h6>Антон.</h6>
                    </div>
                    <div class="comment_block">
                        <p>
                            Огромное спасибо коллективу за отличную работу в 2015 году.
                            Неоднократно покупала у вас технику, и ни разу не разочаровалась
                            в ее работе. С наступающим.
                        </p>
                        <h6>Анна.</h6>
                    </div>
                </div>
            </aside>

        </div>

        <footer class="row">
            <div id="about_block" class="col-xs-7">
                <h6>Магазин ноутбуков «<span>NoteShop.by</span>»</h6>
                <ul>
                    <li>Доставка</li>
                    <li>Оплата</li>
                    <li>Гарантия</li>
                    <li>О нас</li>
                </ul>
            </div>
            <div id="design_block" class="col-xs-5">
                <h3>Created by Kostevich Vladislav</h3>
            </div>
        </footer>

    </div>
</main>

</body>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
</html>
