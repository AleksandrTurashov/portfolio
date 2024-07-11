<?php

    require_once("Model.php");

    class FitnesClassName extends Model{

        public function selectClassesName(){

            $sql = "SELECT * FROM  `class_names`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;

            return $data;
        }
        
    }