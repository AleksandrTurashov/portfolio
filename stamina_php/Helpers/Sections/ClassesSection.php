<?php

    require_once('Controllers/IndexController.php');

    require_once('Helpers/View.php');

    require_once('Helpers/Widgets/ClassesWidget.php');

    class ClassesSection extends View{

        static function render(){

            $name = 'classes_section';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }