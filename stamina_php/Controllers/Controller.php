<?php

class Controller{
    static function render($pathFile, $widgets=[]){
        include_once('Views/pages/'.$pathFile.'.php');
    }
}