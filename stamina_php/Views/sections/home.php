
    <div class="video_wrap" id="home_section" data-scroll="#home_section">
        <video autoplay muted loop class="background_video">
            <source src="recources/video/videoplayback.webm" type="video/webm">
        </video>
    </div>

    <div class="header_motivation">
        <div class="wraper">
            <div class="motivation_wrap">
                <h2><?php echo $data[0]['title'] ?></h2>
                <p><?php echo $data[0]['description'] ?></p>
            </div>
        </div>
    </div>

    <div class="header_contactUS">
        <div class="scew_block"></div>
        <div class="contactUs_wraper">
            <div class="working_hours">
                <h3>Hours</h3>
                <p>Opening: 7:30am — Closing: 9:00pm</p>
            </div>
            <button class="contactUs_btn" data-btn_scroll_spy_header="#contact_section" type="button">
                <span>contact us</span>
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
    </div>