<?php
    foreach($data as $class){
    
        echo '<div class="class_wrap">
                <div class= image_wrap>
                    <img src="'.$class["image"].'" alt="image">
                </div>
                <div class="description_wrap">
                    <h3>
                        '.$class["class_name"].'
                    </h3>
                    <span>
                        By '.$class["trainer_name"].' '.$class["trainer_surname"].',
                    </span>
                    <span>
                        '.$class["class_duration"].' minutes
                    </span>
                </div>
            </div>';
    }
?>