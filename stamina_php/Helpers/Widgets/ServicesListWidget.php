<?php

include_once('Controllers/IndexController.php');
include_once('Helpers/Widget.php');

class ServicesListWidget extends Widget {

    static function render(){

        $services= new IndexController;

        $data = $services->serviceAction();

        Widget::pathIncludeWidget('servicesList', $data);
    }
    
}