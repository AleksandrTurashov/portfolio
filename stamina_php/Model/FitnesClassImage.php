<?php

    require_once("Model.php");

    class FitnesClassImage extends Model{

        public function selectClassImages(){

            $sql = "SELECT * FROM  `class_images`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;

            return $data;
        }
        
    }