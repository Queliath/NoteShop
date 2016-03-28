<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = Yii::app()->name . ' - Каталог';

$addToBasketScript = '
    $(".catalog_item .add_to_basket").click(function(){
        var self = this;
        if($(self).hasClass("added")){
            alert("Товар уже находится в корзине!");
        }
        else{
            $.get(self.getAttribute("data-href"), {}, function(data){
                //Обновление кнопки
                $(self).addClass("added");
                self.innerHTML = "Товар добавлен";

                document.querySelector("#basket_button_block h4 span").innerHTML = data;
            });
        }
        return false;
    });
';

Yii::app()->clientScript->registerScript('addToBasket',$addToBasketScript);

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
