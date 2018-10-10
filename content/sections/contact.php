<div id="contact" class="section c-onepage-contact">
            <div class="container">
                <div class="o-contact-block wow fadeIn">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="o-contact-info text-left">
                                <h2><?php echo $contactTitle; ?></h2>
                                <div class="o-c-info">
                                    <a href="mailto:info@luxantdigitalbank.com">
                                        <i class="icon-Envelope3"></i><?php echo $contactMail; ?>
                                    </a>
                                </div>
                                <!--<div class="o-c-info">
                                    <a href="tel:925251029">
                                        <i class="icon-Mobile"></i><?php //echo $contactPhone; ?>
                                    </a>
                                </div>-->
                                <div class="o-c-info">
                                    <i class="icon-Store3"></i><?php echo $contactAdress; ?> 
                                    <br><?php echo $contactPostal; ?></div>
                                <a href="#" class="btn btn-small">
                                    <i class="icon-Store"></i><?php echo $contactMapTitle; ?></a>
                                <div class="o-follow-us">
                                    <?php echo $contactFollow; ?>
                                    <a href="https://www.facebook.com/ALUX.BANK/" target="_blank" rel="noopener">
                                        <i class="icon-Facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/lux_ant" target="_blank" rel="noopener">
                                        <i class="icon-Twitter2"></i>
                                    </a>
                                    <a href="https://www.instagram.com/lux_ant_digital/" target="_blank" rel="noopener">
                                        <i class="icon-Instagram"></i>
                                    </a>
                                    <a href="https://t.me/LUX_ANT_DIGITAL" target="_blank" rel="noopener">
                                        <i class="icon-Telegram"></i>
                                    </a>
                                    <a href="https://www.reddit.com/user/LUX_ANT_DIGITAL/" target="_blank" rel="noopener">
                                        <i class="icon-Reddit"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/lux-ant-digital/">
                                        <i class="icon-Linkedin"></i>
                                    </a>
                                </div>
                                <!-- End of .o-follow-us -->
                            </div>
                            <!-- End of .contact-info -->
                        </div>
                        <!-- End of .col-md-3 -->

                        <div class="col-lg-8">
                            <div class="flip-container wow fadeIn">
                                <div class="flipper">
                                    <div class="o-form-content front">
                                        <form method="POST" action="email/email.php" class="o-contact-form">
                                            <h4 class="text-center"><?php echo $contactMailFormTitle; ?></h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="<?php echo $contactMailFormFirstName; ?>" name="fname">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="<?php echo $contactMailFormLastName; ?>" name="lname">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="<?php echo $contactMailFormPhone; ?>" name="phone">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" placeholder="<?php echo $contactMailFormEmail; ?>" name="email">
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea placeholder="<?php echo $contactMailFormMessage; ?>" name="message"></textarea>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn"><?php echo $buttomSubmitMessage; ?></button>
                                                </div>
                                            </div>
                                            <!-- End of .row -->
                                        </form>
                                        <!-- End of .o-contact-form -->
                                    </div>
                                    <!-- End of .o-form-content -->

                                    <div class="back o-map-container">
                                        <div id="map" class="o-map"></div>
                                    </div>
                                    <!-- o-map-content -->
                                </div>
                                <!-- End of .fliper -->
                            </div>
                            <!-- End of .flip-container -->
                        </div>
                        <!-- End of .col-md-3 -->
                    </div>
                    <!-- End of .row -->
                </div>
                <!-- End of .o-contact-block -->
            </div>
            <!-- End fo .container -->
        </div>
        <!-- End of .c-onepage-contact -->