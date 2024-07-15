<?php

    require_once("Model.php");

    class Service extends Model{

        public function selectServiceContent(){
            
            $sql = "SELECT * FROM `services`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
    }