<?php

class Controller{
    static function render($pathFile){
        include_once('Views/pages/'.$pathFile.'.php');
    }
}