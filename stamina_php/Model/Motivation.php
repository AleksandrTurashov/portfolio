<?php

    require_once("Model.php");

    class Motivation extends Model{

        public function selectMotivationContent($id){
            
            $sql = "SELECT * FROM `motivation` WHERE `id`='".$id."'";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        public function selectMotivationInfo(){
            
            $sql = "SELECT * FROM `motivation`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
    }