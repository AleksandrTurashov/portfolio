<?php

class Controller{
    static function render($pathFile, $data = null, $nameLayout = null){

        if($nameLayout == null)
        include_once('Views/pages/'.$pathFile.'.php');
        
        if($nameLayout != null){
            $page = "Views/pages/".$pathFile.".php";
            include_once("Views/layouts/".$nameLayout.".php");
        }
    }

    static function error404(){
        echo "error 404";
    }
}