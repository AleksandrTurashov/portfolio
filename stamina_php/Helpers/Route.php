<?php

class Route{
    static function urlParse(){
        require_once('Controllers/IndexController.php');
        $obj = new IndexController;
        $obj->indexAction();
    }
}