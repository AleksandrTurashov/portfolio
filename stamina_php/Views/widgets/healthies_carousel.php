
<div class="helthies_list_wrap">
    <div class="helthies_list_carousel carousel_animation">



        <?php foreach($data as $health): ?>

            <div class="service_wrap ">
                <div class="image_wrap">
                    <img src="<?php echo $health['image'] ?>" alt="image">
                </div>
                <div class="description_wrap">
                    <h3>
                        <?php echo $health['item'] ?>
                    </h3>
                    <p>
                        <?php echo $health['description'] ?>
                    </p>
                </div>
            </div>

        <?php endforeach ?>

    </div>
    <div class="switch_btns_wrap">
        <div class='switch_wrap abled_btn'><span class='dot_switch active'  id='1'></span></div>
        <div class='switch_wrap abled_btn'><span class='dot_switch' id='2'></span></div>
        <div class='switch_wrap'><span class='dot_switch' id='3'></span></div>
        <div class='switch_wrap'><span class='dot_switch' id='4'></span></div>
        <div class='switch_wrap'><span class='dot_switch' id='5'></span></div>
        <div class='switch_wrap'><span class='dot_switch' id='6'></span></div>
    </div>
</div>