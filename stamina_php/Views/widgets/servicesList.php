
<div class="services_list_wrap">

    <?php foreach($data as $service): ?>

        <div class="service_wrap animate_item">
            <div class="image_wrap">
                <img src="<?php echo $service['image'] ?>" alt="image">
            </div>
            <div class="description_wrap">
                <h3>
                    <?php echo $service['item'] ?>
                </h3>
                <p>
                    <?php echo $service['description'] ?>
                </p>
            </div>
        </div>

    <?php endforeach ?>

</div>