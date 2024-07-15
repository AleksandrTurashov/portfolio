<?php

    include_once('Controllers/IndexController.php');
    include_once('Helpers/Widget.php');

    class HealthiesCarousellWidget extends Widget {

        static function render(){

            $healthies= new IndexController;

            $data = $healthies->serviceAction();

            Widget::pathIncludeWidget('healthies_carousel', $data);
        }
        
    }