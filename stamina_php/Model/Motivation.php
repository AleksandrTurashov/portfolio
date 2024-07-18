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
        
        public function updateMotivation($data){

            $motivation = $this->selectMotivationContent($data['id']);
            $result = [];
            if($data['theme'] != $motivation[0]['theme']){
                $sql = "UPDATE motivation SET theme = '".$data['theme']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['theme'] = $request['status'];
            }
            if($data['description'] != $motivation[0]['description']){
                $sql = "UPDATE motivation SET description = '".$data['description']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['description'] = $request['status'];
            }
            return $result;
        }
    }