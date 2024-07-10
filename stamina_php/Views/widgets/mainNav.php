
<div class="header_navigation">
    <div class="wraper">
        <div class="logo">
            <a href="">Stamina</a>
        </div>
        <div class="bar_navigation_btn" id="bar_navigation_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="main_nav">
            <ul>
                <?php 
                for($i = 0; $i < count($data); $i++ ):?>

                    <?php if($i == 0):?>
                        <li><a href="#" class="nav_item active" data-main_nav_spy="<?php echo $data[0]['nav_spy']?>"><?php echo $data[0]['name']?></a></li>
                    <?php endif;?>

                    <?php if($i > 0):?>
                        <li><a href="#" class="nav_item" data-main_nav_spy="<?php echo $data[$i]['nav_spy']?>"><?php echo $data[$i]['name']?></a></li>
                    <?php endif;?>
               
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>