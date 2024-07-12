<?php

    include_once('Controllers/IndexController.php');
    include_once('Helpers/Widget.php');

    class SheduleWidget extends Widget {

        static function renderSheduleList($weekDay){
            $content = new IndexController;
            $data = $content->sheduleAction($weekDay);
            $result = null;
            foreach($data as $class){
                $result .=  '<div class="class_wrap">
                            <div class= image_wrap>
                                <img src="'.$class['image'].'" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    '.$class['class_name'].'
                                </h3>
                                <span>
                                    By '.$class['trainer_name'].' '.$class['trainer_surname'].',
                                </span>
                                <span>
                                    '.$class['class_duration'].' minutes
                                </span>
                            </div>
                        </div>';
            }
            return $result;
        }

        static function render($weekDay){

            $data = SheduleWidget::renderSheduleList($weekDay);

            if($weekDay == "monday"){
                echo '          
                    <div class="shedule_week_wrap active" id="'.$weekDay.'">
                        '.$data.'        
                    </div>';
            }
            else{
                echo '          
                    <div class="shedule_week_wrap" id="'.$weekDay.'">
                        '.$data.'        
                    </div>';
            }
        }
        
    }