<?php

    require_once('Controllers/IndexController.php');

    require_once('Helpers/View.php');

    class ContactSection extends View{

        static function render(){

            $name = 'contact_section';
            $content = new IndexController;

            $data = $content->siteSectionActive($name);

            View::pathIncludeView($name, $data);
        }

    }