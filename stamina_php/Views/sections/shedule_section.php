
<div class="shedule_wrap" id="<?php echo $data[0]['name']?>" data-scroll="<?php echo "#".$data[0]['name']?>">
    <div class="wraper">
        <div class="title_wrap">
            <p class="title"><?php echo $data[0]['sm_title']?></p>
            <h2><?php echo $data[0]['title']?></h2>
            <p><?php echo $data[0]['description']?></p>
        </div>
        <?php 
            WeekTabWidget::render(); 
            SheduleWidget::render('monday');
            SheduleWidget::render('tuesday');
            SheduleWidget::render('wensday');
            SheduleWidget::render('thorsday');
            SheduleWidget::render('fryday');
            SheduleWidget::render('sutterday');
            SheduleWidget::render('sunday');   
        ?>
    </div>  
</div>