    
    <div class="contactUs_wrap" id="<?php echo $data[0]['name'] ?>" data-scroll="<?php echo "#".$data[0]['name'] ?>">
        <div class="wraper">
            <div class="title_wrap">
                <p class="title"><?php echo $data[0]['sm_title'] ?></p>
                <h2><?php echo $data[0]['title'] ?></h2>
                <p><?php echo $data[0]['description'] ?></p>
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