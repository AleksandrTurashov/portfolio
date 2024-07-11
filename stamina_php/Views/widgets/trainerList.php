<?php

    foreach($data as $trainer){
        echo "
        <div class='trainer_wrap animate_item'>
            <div class='image_wrap'>
                <img src=".$trainer['image']." alt='image'>
            </div>
            <div class='descripton_wrap'>
                <h3>"
                    .$trainer['name']." ".$trainer['surname'].
                "</h3>
                <span>
                    TRAINER
                </span>
                <p>
                    ".$trainer['description']."
                </p>
            </div>
        </div>";
    }
?>
