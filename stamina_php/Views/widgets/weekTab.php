
<div class="week_wrap">
    <ul>
        <?php foreach($data as $day):?>
            <?php if($day['alias'] == 'monday'): ?>
                <li><span class="day_wrap active" data-day="<?php echo $day['alias'] ?>"><?php echo $day['day'] ?></span></li>
            <?php endif ?>
            <?php if($day['alias'] != 'monday'): ?>
            <li><span class="day_wrap" data-day="<?php echo $day['alias'] ?>"><?php echo $day['day'] ?></span></li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
</div>