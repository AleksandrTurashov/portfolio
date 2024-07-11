<?php

    require_once("Model.php");

    class WorkDay extends Model{

        public function selectWorkDays(){
            
            $sql = "SELECT * FROM  `work_days`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }
        
    }