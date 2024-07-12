<?php

    require_once("Model.php");
    require_once("Trainer.php");
    require_once("FitnesClassName.php");
    require_once("FitnesClassImage.php");
    require_once("FitnesClassDuration.php");
    

    class FitnesClass extends Model{

        public function selectClassList(){
            $sql = "SELECT * FROM  `classes`";
            if(!$this->statusRequest($sql)) return "request: 500";
            $fitnesClasses = $this->getData($sql);
            return $fitnesClasses;
        }

        public function selectClassesInfo(){

            $tranerList = new Trainer;
            $trainers = $tranerList->selectTrainers();

            $classNamesList = new FitnesClassName;
            $classNames = $classNamesList->selectClassesName();

            $imageList = new FitnesClassImage;
            $images = $imageList-> selectClassImages();

            $durationList = new FitnesClassDuration;
            $intervals = $durationList-> selectClassDuration();

            $fitnesClasses = $this->selectClassList();

            $data = [];
            $i = 0;
            foreach($fitnesClasses as $fitnesClass){
                foreach($trainers as $trainer){
                    if($fitnesClass['trainer_id'] == $trainer['id']){
                        $data[$i]['trainer_name'] = $trainer['name'];
                        $data[$i]['trainer_surname'] = $trainer['surname'];
                    }
                }
                foreach($classNames as $className){
                    if($fitnesClass['class_name_id'] == $className['id']){
                        $data[$i]['class_name'] = $className['name'];
                    }
                }
                foreach($images as $image){
                    if($fitnesClass['image_id'] == $image['id']){
                        $data[$i]['image'] = $image['path'];
                    }
                }
                foreach($intervals as $interval){
                    if($fitnesClass['duration_id'] == $interval['id']){
                        $data[$i]['class_duration'] = $interval['duration'];
                    }
                }
                $data[$i]['id'] = $fitnesClass['id'];
                $i++;
            }

            return $data;
        }
                
    }