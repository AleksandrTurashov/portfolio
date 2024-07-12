<?php

    require_once("Model.php");
    require_once("Workday.php");
    require_once("FitnesClass.php");

    class Shedule extends Model{

        public function selectShedule(){
            
            $sql = "SELECT * FROM  `shedule`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;
        }

        public function selectSheduleByDay($workDay){

            $dayList = new Workday;
            $days = $dayList->selectWorkDays();

            $wDay = 0;
            foreach($days as $day){
                if($day['alias'] == $workDay) {
                    $wDay = $day['id'];
                    break;
                }
            }
            
            $sql = "SELECT * FROM  `shedule` WHERE day_id='".$wDay."'";
            if(!$this->statusRequest($sql)) return "request: 500";
            $data = $this->getData($sql);
            return $data;

        }

        public function selectSheduleInfo($workDay){
            
            $sheduleList = $this->selectSheduleByDay($workDay);

            $fitnesClassList = new FitnesClass;
            $fitnesClasses = $fitnesClassList->selectClassesInfo();

            $data = [];
            $i = 0;
            foreach($sheduleList as $shed){
                foreach($fitnesClasses as $fitClass){

                    if($shed['class_id'] == $fitClass['id']){
                        $data[$i] = $fitClass;
                    }
                }
                $i++;
            }
            return $data;
        }
        
    }