<?php

require_once ("Controller.php");

require_once("Model/Menu.php");
require_once("Model/Section.php");
require_once("Model/Motivation.php");
require_once("Model/Trainer.php");
require_once("Model/FitnesClass.php");
require_once("Model/WorkDay.php");
require_once("Model/Shedule.php");

require_once("Helpers/Widgets/MenuWidget.php");
require_once("Helpers/Widgets/MotivationWidget.php");

require_once("Helpers/Sections/HomeSection.php");
require_once("Helpers/Sections/HealthiesSection.php");
require_once("Helpers/Sections/ClassesSection.php");
require_once("Helpers/Sections/SheduleSection.php");
require_once("Helpers/Sections/TrainersSection.php");
require_once("Helpers/Sections/ServicesSection.php");
require_once("Helpers/Sections/ContactSection.php");
require_once("Helpers/Sections/Footer.php");

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

    public function trainersListAction(){

        $content = new Trainer;
        $data = $content->selectTrainers();
        return $data;
    }

    public function classesInfoAction(){

        $content = new FitnesClass;
        $data = $content->selectClassesInfo();
        return $data;
    }
    
    public function workDaysAction(){

        $content = new WorkDay;
        $data = $content->selectWorkDays();
        return $data;
    }

    public function sheduleAction($workDay){

        $content = new Shedule;
        $data = $content->selectSheduleInfo($workDay);
        return $data;
    }

}