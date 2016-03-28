$(document).ready(function(){
    //----------------------------------------------------------------------------------------
    //--------------------ВЫПАДАЮЩЕЕ МЕНЮ В МОБИЛЬНОЙ ВЕРСИИ--------------------------------
    //----------------------------------------------------------------------------------------
    var show_menu_button = document.querySelector("#show_menu_button");
    var menu_list = document.querySelector("#menu_list");
    var close_menu_space = document.querySelector("#close_menu_space");
    var menu_list_visible = false;

    $(show_menu_button).click(function(){
        if(menu_list_visible == false){
            menu_list.style.display = "block";
            close_menu_space.style.display = "block";
            show_menu_button.style.boxShadow = "inset 0 0 3px 0 #000000";
            menu_list_visible = true;
        }
    });

    $(close_menu_space).click(function(){
        menu_list.style.display = "none";
        close_menu_space.style.display = "none";
        show_menu_button.style.boxShadow = "none";
        menu_list_visible = false;
    });

    //----------------------------------------------------------------------------------------
    //--------------------ВЫПАДАЮЩИЕ МЕНЮ ФИЛЬТРАЦИИ--------------------------------
    //----------------------------------------------------------------------------------------
    $("#search_panel h4").click(function(){
        var options_block_selector = "#" + this.getAttribute("data-block") + " .options_block";
        var options_block = document.querySelector(options_block_selector);
        if(options_block.getAttribute("data-visible") == 0){
            options_block.style.display = "block";
            options_block.setAttribute("data-visible", "1");
        }
        else{
            options_block.style.display = "none";
            options_block.setAttribute("data-visible", "0");
        }
    });
});
