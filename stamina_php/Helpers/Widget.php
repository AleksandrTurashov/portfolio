<?php
    class Widget{
        
        static function pathIncludeWidget($widgetPath, $data){
            include_once('Views/widgets/'.$widgetPath.'.php');
        }
        
    }