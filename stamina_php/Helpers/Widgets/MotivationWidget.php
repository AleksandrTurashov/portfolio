<?php

    require_once('Controllers/IndexController.php');
    require_once('Helpers/Widget.php');

    class MotivationWidget extends Widget {

        static function render($id){

            $content = new IndexController;
            $data = $content->motivationAction($id);
            
            echo '
                    <div class="motivation_wrap">
                        <div class="motivation_img">
                            <img src="'.$data[0]["image"].'" alt="image">
                        </div>
                        <div class="motivation_phrase wraper">
                            <div class="phrase_wrap">
                                <h2 class="title">'.$data[0]["theme"].'</h2>
                                <p class="description">'.$data[0]["description"].'</p>
                            </div>
                        </div>
                    </div>';
        }
        
    }