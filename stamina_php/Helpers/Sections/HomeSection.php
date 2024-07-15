<?php

    include_once('Controllers/IndexController.php');

    include_once('Helpers/View.php');

    class HomeSection extends View{

        static function render(){

            $name = 'home';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }