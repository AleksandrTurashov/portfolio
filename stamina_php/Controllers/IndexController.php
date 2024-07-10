<?php

require_once ("Controller.php");

require_once("Model/Menu.php");
require_once("Model/Section.php");
require_once("Model/Motivation.php");

require_once("Helpers/Widgets/MenuWidget.php");
require_once("Helpers/Widgets/MotivationWidget.php");

require_once("Helpers/Sections/HomeSection.php");
require_once("Helpers/Sections/HealthiesSection.php");


class IndexController extends Controller{

    public function indexAction(){
        Controller::render('index');
    }

    public function menuNavAction(){

        $items = new Menu;
        $list = $items->selectMenuItems();
        return $list;
    }

    public function siteSectionActive($sectionName){

        $content = new Section;
        $data = $content->selectSectionContent($sectionName);
        return $data;
    }

    public function motivationAction($id){

        $content = new Motivation;
        $data = $content->selectMotivationContent($id);
        return $data;
    }
    
}