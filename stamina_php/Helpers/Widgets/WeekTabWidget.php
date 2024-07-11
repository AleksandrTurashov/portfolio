<?php

    include_once('Controllers/IndexController.php');
    include_once('Helpers/Widget.php');

    class WeekTabWidget extends Widget {

        static function render(){

            $menu_list = new IndexController;

            $data = $menu_list->workDaysAction();

            Widget::pathIncludeWidget('weekTab', $data);
        }
        
    }