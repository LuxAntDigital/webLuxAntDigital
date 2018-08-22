            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="banner-txt">
                            <h1><?php echo $titulo; ?></h1>
                            <p><?php echo $subtitulo; ?></p>
                            <a href="#" class ="btn" data-toggle="modal" data-target="#downloads"> <?php echo $cabeceraBotones ?></a>
                            <a href="https://www.luxantdigitalbank.com/get-referral.php" class ="btn" ><?php echo $referral; ?></a>
                            <a class="btn" href="documents/<?php echo $buttonLink; ?>/Trading-bot-<?php echo $buttonLink; ?>.pdf" target="_blank">TRADING BOT</a>
                            <a class="btn btn-play video-popup" href="https://www.youtube.com/watch?v=i5ceyVrcnNw">
                                <span>
                                    <i class="fas fa-play"></i>
                                </span> <?php echo $playVideo; ?>
                            </a>
                            

                        </div>
                        <!-- End of .banner-txt -->
                    </div>
                    <!-- End of .col-md -->

                    <div class="col-md">
                        <div class="countdown-box ml-md-auto">
                            <h4><?php echo $countdownTitle ?></h4>
                            <div class="countdown">
                                <span id="clock"></span>
                                <div class="progress">
                                    <div class="progress-bar" data-transitiongoal="20"></div>
                                </div>
                                <!-- End of .progress -->
                                <p><?php echo $capital; ?></p>
                                <p style="color:yellow"><?php echo $promotion ?></p>
                                <p style="color:yellow"><small><?php echo $smallLetters; ?></small></p>
                                <a href="https://luxantdigitalbank.com/buy.php?lang=<?php echo $langPanel; ?>" class="btn secondary-btn"><?php echo $buybutton; ?></a>
                                <br/>
                                <div class="col-md-12 text-center">
                                    <h6><?php echo $payMethod; ?></h6>
                                    <div class="footer-widget o-credit-cards">
                                        <img src="images/credit-cards/ethereum.ico" alt="Ethereum">
                                        <img src="images/credit-cards/bitcoin.ico" alt="Bitcoin">
                                        <img src="images/credit-cards/paypal.png" alt="Paypal">
                                    </div>
                                </div>
                            </div>
                            <!-- End of .countdown -->
                            
                        </div>
                        <!-- End of .countdown-box -->
                        <div class="radial-bg"></div>
                    </div>
                    <!-- End of .col-md -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .container -->