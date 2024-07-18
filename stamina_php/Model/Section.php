<?php

    require_once("Model.php");

    class Section extends Model{

        public function selectSectionContent($sectionName){
            
            $sql = "SELECT * FROM `site_sections` WHERE `name`='".$sectionName."'";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
        public function selectSections(){
            
            $sql = "SELECT * FROM `site_sections`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
        public function selectSectionInfo($id){
            
            $sql = "SELECT * FROM `site_sections` WHERE `id`='".$id."'";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        public function updateSection($data){

            $section = $this->selectSectionInfo($data['id']);
            $result = [];
            if($data['title'] != $section[0]['title']){
                $sql = "UPDATE site_sections SET title = '".$data['title']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['title'] = $request['status'];
            }
            if($data['description'] != $section[0]['description']){
                $sql = "UPDATE site_sections SET description = '".$data['description']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['description'] = $request['status'];
            }
            if(isset($data['sm_title']) && $data['sm_title'] != $section[0]['sm_title']){
                $sql = "UPDATE site_sections SET sm_title = '".$data['sm_title']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['sm_title'] = $request['status'];
            }
            return $result;
        }
    }