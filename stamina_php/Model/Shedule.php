<?php

    require_once("Model.php");

    class Shedule extends Model{

        public function selectShedule(){
            
            $sql = "SELECT * FROM  `shedule`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        
        
    }