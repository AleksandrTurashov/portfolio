<?php

    include_once('Controllers/IndexController.php');

    include_once('Helpers/View.php');

    include_once('Helpers/Widgets/TrainerListWidget.php');

    class TrainersSection extends View{

        static function render(){

            $name = 'trainers_section';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }