<?php

    require_once("Model.php");

    class FitnesClassDuration extends Model{

        public function selectClassDuration(){

            $sql = "SELECT * FROM  `class_duration`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;

            return $data;
        }
        
    }