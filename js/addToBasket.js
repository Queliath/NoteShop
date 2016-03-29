$(".add_to_basket").click(function(){

    var self = this;

    if($(self).hasClass("added")){

        alert("Товар уже находится в корзине!");

    }
    else{

        request = new XMLHttpRequest();
        request.open('GET', self.getAttribute("data-href"),true);

        request.onreadystatechange = function(){

            if(request.readyState == 4){

                if(request.status == 200){
                    $(self).addClass("added");
                    self.innerHTML = "Товар добавлен";
                    document.querySelector("#basket_button_block h4 span").innerHTML = request.responseText;
                }

            }

        };

        request.send(null);

    }

    return false;

});
