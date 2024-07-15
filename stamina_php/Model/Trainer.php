<?php

    require_once("Model.php");

    class Trainer extends Model{

        public function selectTrainers(){
            
            $sql = "SELECT * FROM `trainers`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
    }