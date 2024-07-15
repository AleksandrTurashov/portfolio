<?php

class Route{
    static function urlParse(){
        include_once('Controllers/IndexController.php');
        $obj = new IndexController;
        $obj->indexAction();
    }
}