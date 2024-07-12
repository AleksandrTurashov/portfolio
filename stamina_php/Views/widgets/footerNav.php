
<div class="footer_nav">
    <h4>links</h4>
    <ul>
        <?php foreach($data as $item):?>
                <li><a href="#" class="nav_item" data-main_nav_spy="<?php echo $item['nav_spy']?>"><?php echo $item['name']?></a></li>
        <?php endforeach; ?>
    </ul>
</div>