<?php

    include_once('Controllers/IndexController.php');

    include_once('Helpers/View.php');

    include_once('Helpers/Widgets/ClassesWidget.php');

    class ClassesSection extends View{

        static function render(){

            $name = 'classes_section';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }