<?php

    include_once('Controllers/IndexController.php');

    include_once('Helpers/View.php');

    include_once('Helpers/Widgets/MenuWidget.php');

    class Footer extends View{

        static function render(){

            $name = 'footer';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }