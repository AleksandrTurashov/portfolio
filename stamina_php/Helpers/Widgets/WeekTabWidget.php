<?php

    include_once('Controllers/IndexController.php');
    include_once('Helpers/Widget.php');

    class WeekTabWidget extends Widget {

        static function render(){

            $days = new IndexController;

            $data = $days->workDaysAction();

            Widget::pathIncludeWidget('weekTab', $data);
        }
        
    }