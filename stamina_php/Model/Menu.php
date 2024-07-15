<?php

    require_once("Model.php");

    class Menu extends Model{

        public function selectMenuItems(){
            
            $sql = "SELECT * FROM  `menu`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
    }