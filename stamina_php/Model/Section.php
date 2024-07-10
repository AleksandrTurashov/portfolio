<?php

    require_once("Model.php");

    class Section extends Model{

        public function selectSectionContent($sectionName){
            
            $sql = "SELECT * FROM `site_sections` WHERE `name`='".$sectionName."'";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
    }