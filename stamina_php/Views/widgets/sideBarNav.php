
<div class="sidebar_menu">
    <div class="close_bar_navigation_btn" id="close_bar_navigation_btn">
        <i class="fa-solid fa-xmark"></i>   
    </div>
    <div class="sidebar_nav">
        <ul>
            <?php 
                for($i = 0; $i < count($data); $i++ ):?>

                    <?php if($i == 0):?>
                        <li><a href="#" class="nav_item active" data-side_bar_spy="<?php echo $data[0]['nav_spy']?>"><?php echo $data[0]['name']?></a></li>
                    <?php endif;?>

                    <?php if($i > 0):?>
                        <li><a href="#" class="nav_item" data-side_bar_spy="<?php echo $data[$i]['nav_spy']?>"><?php echo $data[$i]['name']?></a></li>
                    <?php endif;?>
            
            <?php endfor; ?>
        </ul>
    </div>
</div>
