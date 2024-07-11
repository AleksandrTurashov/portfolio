<?php

    require_once('Controllers/IndexController.php');
    require_once('Helpers/Widget.php');

    class TrainerListWidget extends Widget {

        static function render($pathFile){

            $trainers= new IndexController;

            $data = $trainers->trainersListAction();

            Widget::pathIncludeWidget($pathFile, $data);
        }
        
    }