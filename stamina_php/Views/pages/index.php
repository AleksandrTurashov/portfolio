<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stamina</title>
    <link rel="stylesheet" href="recources/css/style.css">
	<link rel="stylesheet" href="recources/css/all.min.css">
</head>
<body>
    <div class="wrap">
            <?php MenuWidget::render('sideBarNav'); ?>
        <header>
            <?php MenuWidget::render('mainNav'); ?>
        </header>
        <div class="main_wrap" id="main_content">
            <?php 
                HomeSection::render();
                HealthiesSection::render();
                MotivationWidget::render(1);               
                ClassesSection::render();         
                MotivationWidget::render(2);
                SheduleSection::render();
                MotivationWidget::render(3);       
                TrainersSection::render();
                ServicesSection::render();
                ContactSection::render();
            ?>
        </div>
        <footer id="footer">
            <?php Footer::render(); ?>
        </footer>
    </div>
    <script src="recources/js/script.js"></script>
</body>
</html>

