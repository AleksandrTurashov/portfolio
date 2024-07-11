<?php

    require_once('Controllers/IndexController.php');

    require_once('Helpers/View.php');

    class Footer extends View{

        static function render(){

            $name = 'footer';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }