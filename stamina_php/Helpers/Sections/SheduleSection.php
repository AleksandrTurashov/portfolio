<?php

    require_once('Controllers/IndexController.php');

    require_once('Helpers/View.php');

    require_once('Helpers/Widgets/WeekTabWidget.php');
    require_once('Helpers/Widgets/SheduleWidget.php');

    class SheduleSection extends View{

        static function render(){
            $name = 'shedule_section';
            $content = new IndexController;
            $data = $content->siteSectionActive($name);
            View::pathIncludeView($name, $data);
        }

    }