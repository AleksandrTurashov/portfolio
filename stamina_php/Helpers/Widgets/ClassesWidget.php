<?php

    require_once('Controllers/IndexController.php');
    require_once('Helpers/Widget.php');

    class ClassesWidget extends Widget {

        static function render(){

            $fitnesClasses= new IndexController;

            $data = $fitnesClasses->classesInfoAction();

            Widget::pathIncludeWidget('classList', $data);
        }
        
    }