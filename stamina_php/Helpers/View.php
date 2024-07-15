<?php

    class View{

        static function pathIncludeView($sectionPath, $data){
            include_once('Views/sections/'.$sectionPath.'.php');
        }

    }