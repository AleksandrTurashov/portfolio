<?php

    require_once("Model.php");

    class Service extends Model{

        public function selectServiceContent(){
            
            $sql = "SELECT * FROM `services`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        public function selectServiceInfo($id){
            
            $sql = "SELECT * FROM `services` WHERE id='".$id."'";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        public function updateService($data){

            $service = $this->selectServiceInfo($data['id']);
            $result = [];
            if($data['item'] != $service[0]['item']){
                $sql = "UPDATE services SET item = '".$data['item']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['item'] = $request['status'];
            }
            if($data['description'] != $service[0]['description']){
                $sql = "UPDATE services SET description = '".$data['description']."' WHERE id='".$data['id']."'";
                if(!$this->statusRequest($sql)) return "request: 500";
                $request = $this->setData($sql);
                $result ['description'] = $request['status'];
            }
            return $result;
        }


    }