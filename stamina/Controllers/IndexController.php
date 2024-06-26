<?php

require_once ("Controller.php");
class IndexController extends Controller{

    public function indexaction(){
        Controller::render('index');
    }
    
}