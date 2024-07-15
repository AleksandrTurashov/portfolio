<?php

    include_once('Controllers/IndexController.php');

    include_once('Helpers/View.php');

    include_once('Helpers/Widgets/HealthiesCarousellWidget.php');

    class HealthiesSection extends View{

        static function render(){

            $name = 'healthies_section';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }