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
       
            <?php 
                MenuWidget::render('sideBarNav');
            ?>

        <header>

            <?php 
                MenuWidget::render('mainNav');
            ?>

        </header>
        <div class="main_wrap" id="main_content">

            <?php 
                HomeSection::render();

                HealthiesSection::render();

                MotivationWidget::render(1);
                 
            ?>

            <div class="classes_wrap" id="classes_section" data-scroll="#classes_section">
                <div class="wraper">
                    <div class="title_wrap">
                        <p class="title">Fitness Class</p>
                        <h2>Classes</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="classes_list_wrap">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>

            <?php MotivationWidget::render(2); ?>

            <div class="shedule_wrap" id="shedule_section" data-scroll="#shedule_section">

                <div class="wraper">
                    <div class="title_wrap">
                        <p class="title">Fitness Sched</p>
                        <h2>Schedule</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="week_wrap">
                        <ul>
                            <li><span class="day_wrap active" data-day="monday">M</span></li>
                            <li><span class="day_wrap" data-day="tuesday">T</span></li>
                            <li><span class="day_wrap" data-day="wensday">W</span></li>
                            <li><span class="day_wrap" data-day="thorsday">T</span></li>
                            <li><span class="day_wrap" data-day="fryday">F</span></li>
                            <li><span class="day_wrap" data-day="sutterday">S</span></li>
                            <li><span class="day_wrap" data-day="sunday">S</span></li>
                        </ul>
                    </div>
                    <div class="shedule_week_wrap active" id="monday">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #1
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="shedule_week_wrap" id="tuesday">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #2
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #2
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #2
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #2
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #2
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #2
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="shedule_week_wrap" id="wensday">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #3
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #3
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #3
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #3
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #3
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #3
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="shedule_week_wrap" id="thorsday">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #4
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #4
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #4
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #4
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #4
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #4
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="shedule_week_wrap" id="fryday">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #5
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #5
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #5
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #5
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #5
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #5
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="shedule_week_wrap" id="sutterday">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #6
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_2.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #6
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #6
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #6
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #6
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #6
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="shedule_week_wrap" id="sunday">
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #7
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>                 
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_4.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #7
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #7
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_3.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #7
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #7
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                        <div class="class_wrap">
                            <div class= image_wrap>
                                <img src="recources/image/img_1.jpg" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fitness Class Name #7
                                </h3>
                                <span>
                                    By Justin Daniel,
                                </span>
                                <span>
                                    30 minutes
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
            
            <?php MotivationWidget::render(3); ?>

            <div class="trainers_wrap" id="traners_section" data-scroll="#traners_section">
                <div class="wraper">
                    <div class="title_wrap animate_title">
                        <p class="title">Trainer</p>
                        <h2>Our Trainers</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="trainers_list_wrap">
                        <div class="trainer_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources/image/person_1.jpg" alt="image">
                            </div>
                            <div class="descripton_wrap">
                                <h3>
                                    Justin Daniel
                                </h3>
                                <span>
                                    TRAINER
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="trainer_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources/image/person_2.jpg" alt="image">
                            </div>
                            <div class="descripton_wrap">
                                <h3>
                                    Justin Daniel
                                </h3>
                                <span>
                                    TRAINER
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="trainer_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources/image/person_3.jpg" alt="image">
                            </div>
                            <div class="descripton_wrap">
                                <h3>
                                    Justin Daniel
                                </h3>
                                <span>
                                    TRAINER
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="trainer_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources/image/person_4.jpg" alt="image">
                            </div>
                            <div class="descripton_wrap">
                                <h3>
                                    Justin Daniel
                                </h3>
                                <span>
                                    TRAINER
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="services_wrap" id="services_section" data-scroll="#services_section">
                <div class="wraper">
                    <div class="title_wrap animate_title ">
                        <p class="title">Fitness Services</p>
                        <h2>Services</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="services_list_wrap">
                        <div class="service_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources\image\2.png" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Be Fit
                                </h3>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="service_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources\image\3.png" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Join Club
                                </h3>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="service_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources\image\4.png" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Gym Fitness
                                </h3>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="service_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources\image\5.png" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Eat Vegie
                                </h3>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="service_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources\image\6.png" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Fruit Juices
                                </h3>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                        <div class="service_wrap animate_item">
                            <div class="image_wrap">
                                <img src="recources\image\1.png" alt="image">
                            </div>
                            <div class="description_wrap">
                                <h3>
                                    Body Warmup
                                </h3>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contactUs_wrap" id="contact_section" data-scroll="#contact_section">
                <div class="wraper">
                    <div class="title_wrap">
                        <p class="title">Get In Touch</p>
                        <h2>Contact Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="contactForm_wrap">
                        <form action="">
                            <div class="input_wraper">
                                <input type="text" placeholder="First name">
                                <input type="text" placeholder="Last name">
                            </div>
                            <input type="text" placeholder="Subject">
                            <input type="email" placeholder="Email">
                            <textarea placeholder="Write your message here."></textarea>
                            <input type="button" class="sendMessage_btn" value="send mesage">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="footer_contactUS">
                <div class="scew_block"></div>
                <div class="contactUs_wraper">
                    <div class="working_hours">
                        <h3>Hours</h3>
                        <p>Opening: 7:30am — Closing: 9:00pm</p>
                    </div>
                    <button class="contactUs_btn" data-btn_scroll_spy_footer="#contact_section"  type="button">
                        <span>contact us</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>
       
        <footer id="footer">
            <div class="footer_navigation">
                <div class="wraper">
                    <div class="footer_about">
                        <h4>about stamina</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="footer_nav">
                        <h4>links</h4>
                        <ul>
                            <li><a href="#" class="nav_item" data-footer_nav_spy="#home_section">home</a></li>
                            <li><a href="#" class="nav_item" data-footer_nav_spy="#classes_section">classes</a></li>
                            <li><a href="#" class="nav_item" data-footer_nav_spy="#shedule_section">shedule</a></li>
                            <li><a href="#" class="nav_item" data-footer_nav_spy="#traners_section">trainer</a></li>
                            <li><a href="#" class="nav_item" data-footer_nav_spy="#services_section">sevices</a></li>
                            <li><a href="#" class="nav_item" data-footer_nav_spy="#contact_section">contact</a></li>
                        </ul>
                    </div>
                    <div class="footer_subscribe">
                        <h4>subscribe</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="footer_form">
                            <form action="">
                                <div class="form_wrap">
                                    <input type="email" placeholder="Email" class="footer_input">
                                    <input type="button" class="footer_btn" value="subscribe" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="recources/js/script.js"></script>
</body>
</html>
