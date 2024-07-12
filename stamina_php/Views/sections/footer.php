
    <div class="footer_navigation">
        <div class="wraper">
            <div class="footer_about">
                <h4><?php echo $data[0]['title'] ?></h4>
                <p><?php echo $data[0]['description'] ?></p>
            </div>

            <?php MenuWidget::render('footerNav'); ?>

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