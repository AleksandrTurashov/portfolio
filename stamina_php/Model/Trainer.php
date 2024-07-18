<?php

    require_once("Model.php");

    class Trainer extends Model{

        public function selectTrainers(){
            
            $sql = "SELECT * FROM `trainers`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        public function selectTrainerInfo($id){
            
            $sql = "SELECT * FROM `trainers` WHERE `id`='".$id."'";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        public function updateTrainer($data){

            $section = $this->selectTrainerInfo($data['id']);
            $result = [];
            if($data['name'] !== $section[0]['name']){
                $sql = "UPDATE trainers SET name = '".$data['name']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['name'] = $request['status'];
            }
            if($data['description'] !== $section[0]['description']){
                $sql = "UPDATE trainers SET description = '".$data['description']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['description'] = $request['status'];
            }
            if($data['surname'] !== $section[0]['surname']){
                $sql = "UPDATE trainers SET surname = '".$data['surname']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['surname'] = $request['status'];
            }
            return $result;
        }
    }