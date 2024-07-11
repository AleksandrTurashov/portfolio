<?php

    include_once('Controllers/IndexController.php');

    include_once('Helpers/View.php');

    include_once('Helpers/Widgets/WeekTabWidget.php');
    // include_once('Helpers/Widgets/SheduleWidget.php');

    class SheduleSection extends View{

        static function render(){
            $name = 'shedule_section';
            $content = new IndexController;
            $data = $content->siteSectionActive($name);
            View::pathIncludeView($name, $data);
        }

    }