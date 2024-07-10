<?php

    require_once('Controllers/IndexController.php');

    require_once('Helpers/View.php');

    class HomeSection extends View{

        static function render(){

            $name = 'home';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }