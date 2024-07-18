<?php

require_once ("Controller.php");

require_once("Model/Trainer.php");
require_once("Model/FitnesClass.php");
require_once("Model/Service.php");
require_once("Model/Section.php");
require_once("Model/Motivation.php");
require_once("Model/Shedule.php");

class AdminController extends Controller{
    
    public function adminAction(){
        $sheduleList = new FitnesClass;
        $data = $sheduleList -> selectClassesInfo();
        Controller::render('admin/admin', $data, 'defaultAdmin');
    }

    public function trainersAction(){
        $trainerList = new Trainer;
        $data = $trainerList -> selectTrainers();
        Controller::render('admin/adminTrainerList', $data, 'defaultAdmin');
    }

    public function fitnesClassesAction(){
        $fitnesClassList = new FitnesClass;
        $data = $fitnesClassList -> selectClassesInfo();
        Controller::render('admin/adminFitnesClassList', $data, 'defaultAdmin');
    }

    public function servicesAction(){
        $serviceList = new Service;
        $data = $serviceList -> selectServiceContent();
        Controller::render('admin/adminServiceList', $data, 'defaultAdmin');
    }

    public function serviceInfoAction(){

        if(isset($_GET['id'])){
            $service = new Service;
            $data = $service -> selectServiceInfo($_GET['id']);

            if(!empty($data))
                Controller::render('admin/adminServiceEdit', $data, 'defaultAdmin');
            else
                Controller::error404();
        }
        else{
            Controller::error404();
        }
    }

    public function serviceEditAction($data){
        if(strlen($data['item']) < 20 && strlen($data['item']) > 3 && strlen($data['description']) < 120 && strlen($data['description']) > 10){
            $service = new Service;
            $request = $service->updateService($data);
           
            if(
                isset($request['item']) && $request['item']=='error' ||
                isset($request['description']) && $request['description']=='error'
            ){
                header("location: ?route=admin/serviceInfo&id=".$data['id']."&request=error");
            }
            else{
                header("location: ?route=admin/services&request=success");
            }
        }
    }

    public function sectionsAction(){
        $sectionList = new Section;
        $data = $sectionList -> selectSections();
        Controller::render('admin/adminSectionList', $data, 'defaultAdmin');
    }

    public function sectionInfoAction(){

        if(isset($_GET['id'])){
            $section = new Section;
            $data = $section -> selectSectionInfo($_GET['id']);

            if(!empty($data))
                Controller::render('admin/adminSectionEdit', $data, 'defaultAdmin');
            else
                Controller::error404();
        }
        else{
            Controller::error404();
        }
    }

    public function sectionEditAction($data){
        if(strlen($data['title']) < 100 && strlen($data['title']) > 3 && strlen($data['description']) < 120 && strlen($data['description']) > 10 ||
            isset($data['sm_title']) && strlen($data['sm_title']) < 20 && strlen($data['sm_title']) > 3 ||
            !isset($data['sm_title'])
            ){
            $section = new Section;
            $request = $section->updateSection($data);
            
            if(
                isset($request['title']) && $request['title']=='error' ||
                isset($request['description']) && $request['description']=='error' ||
                isset($request['sm_title']) && $request['sm_title']=='error'
            ){
                header("location: ?route=admin/sectionInfo&id=".$data['id']."&request=error");
            }
            else {
                header("location: ?route=admin/sections&request=success");
            }
        }
    }

    public function motivationAction(){
        $motivationList = new Motivation;
        $data = $motivationList -> selectMotivationInfo();
        Controller::render('admin/adminMotivationList', $data, 'defaultAdmin');
    }

}