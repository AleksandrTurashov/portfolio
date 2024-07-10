<?php

    require_once('Controllers/IndexController.php');
    require_once('Helpers/Widget.php');

    class MenuWidget extends Widget {

        static function render($pathFile){

            $menu_list = new IndexController;

            $data = $menu_list->menuNavAction();

            Widget::pathIncludeWidget($pathFile, $data);
        }
        
    }
