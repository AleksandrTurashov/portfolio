<?php

    require_once('Controllers/IndexController.php');

    require_once('Helpers/View.php');

    require_once('Helpers/Widgets/TrainerListWidget.php');

    class TrainersSection extends View{

        static function render(){

            $name = 'trainers_section';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }