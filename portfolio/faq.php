<?php include "php/config.php" ?> <!-- Database configuration -->
<?php include "content-portfolio/languages/load-lang.php" ?> <!-- Language plugin -->
<?php include "../content/languages/load-lang.php" ?> <!-- Extra plugin addon from website -->
<?php include "php/head.php" ?> <!-- Head HTML content -->
<?php include "php/bodynav.php" ?> <!-- Header & navbar content -->

      <main>
        <style>
            p {
                color:white;
            }
            ul li{
                color:white;
            }
        </style>
        <div class="container-fluid">
          
          <div class="row">
            <div class="col-xl-12">
            <h1><?php echo $question1; ?></h1>
              <p class="text-left"><?php echo $asked1; ?></p>
              <p class="text-left"><?php echo $asked1content1; ?></p>
              <ul class="text-left">
                <li><?php echo $asked1content2; ?></li>
                <li><?php echo $asked1content3; ?></li>
                <li><?php echo $asked1content4; ?></li>
                <li><?php echo $asked1content5; ?></li>
                <li><?php echo $asked1content6; ?></li>
                <li><?php echo $asked1content7; ?></li>
                <li><?php echo $asked1content8; ?></li>
                <li><?php echo $asked1content9; ?></li>
              </ul>
              <h1><?php echo $question2; ?></h1>
              <p><?php echo $asked2; ?></p>

              <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="o-common-card card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><?php echo $quantityTokens1; ?></h3>
                    </div>
                    <div class="card-body">
                        <img src="images/medals/bronce.png" alt="Medalla de bronce" />
                        <h1 class="card-title pricing-card-title"><?php echo $timeQuantity1; ?><small class="text-muted">/ <?php echo $quantityDate1; ?></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><?php echo $content1Advantage1; ?></li>
                            <br/>
                            <li><?php echo $content1Advantage2; ?></li>
                            <br/>
                            <li><?php echo $content1Advantage3; ?></li>
                        </ul>
                    </div>
                    </div>
                    <div class="o-common-card card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><?php echo $cuantityTokens2; ?></h3>
                    </div>
                    <div class="card-body">
                        <img src="images/medals/silver.png" alt="Medalla de plata" />
                        <h1 class="card-title pricing-card-title"><?php echo $timeQuantity2; ?><small class="text-muted">/ <?php echo $quantityDate2; ?></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><?php echo $content2Advantage1; ?></li>
                            <br/>
                            <li><?php echo $content2Advantage2; ?></li>
                            <br/>
                            <li><?php echo $content2Advantage3; ?></li>
                            <br/>
                            <li><?php echo $content2Advantage4; ?></li>
                        </ul>
                    </div>
                    </div>
                    <div class="o-common-card card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><?php echo $cuantityTokens3; ?></h3>
                    </div>
                    <div class="card-body">
                        <img src="images/medals/gold.png" alt="Medalla de oro" />
                        <h1 class="card-title pricing-card-title"><?php echo $timeQuantity3; ?><small class="text-muted">/ <?php echo $quantityDate3; ?></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><?php echo $content3Advantage1; ?></li>
                            <br/>
                            <li><?php echo $content3Advantage2; ?></li>
                            <br/>
                            <li><?php echo $content3Advantage3; ?></li>
                            <br/>
                            <li><?php echo $content3Advantage4; ?></li>
                            <br/>
                            <li><?php echo $content3Advantage5; ?></li>
                        </ul>
                    </div>
                    </div>
                    <div class="o-common-card card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><?php echo $cuantityTokens4; ?></h3>
                    </div>
                    <div class="card-body">
                        <img src="images/medals/lux.png" alt="Medalla de Lux" />
                        <h1 class="card-title pricing-card-title"><?php echo $timeQuantity4; ?></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><?php echo $content4Advantage1; ?></li>
                            <br/>
                            <li><?php echo $content4Advantage2; ?></li>
                            <br/>
                            <li><?php echo $content4Advantage3; ?></li>
                        </ul>
                    </div>
                    </div>
                </div>
                    </div>
                    <h1><?php echo $question3 ; ?></h1>
                    <p class="text-left"><?php echo $asked3content1 ; ?></p>
                    <p class="text-left"><?php echo $asked3content2 ; ?></p>
                    <h1><?php echo $question4 ; ?></h1>
                    <p class="text-left"><?php echo $asked4; ?></p>
                    <h1><?php echo $question5 ; ?></h1>
                    <p class="text-left"><?php echo $asked4; ?></p>
                    <h1><?php echo $question6 ; ?></h1>
                    <p class="text-left"><?php echo $asked6; ?></p>
                    <h1><?php echo $question7 ; ?></h1>
                    <p class="text-left"><?php echo $asked7; ?></p>
                    <h1><?php echo $question8 ; ?></h1>
                    <p class="text-left"><?php echo $asked8; ?><a href="<?php echo $asked8content2; ?>"><?php echo $asked8content2; ?></a><?php echo $asked8content3; ?></p>
                    <h1><?php echo $question8 ; ?></h1>
                    <p class="text-left"><?php echo $asked9content1; ?>
                    </p>
                    <p class="text-left"><?php echo $asked9content2; ?></p>
                    <p class="text-left"><?php echo $asked9content3; ?>
                      </p>
                    <h1><?php echo $question10 ; ?></h1>
                    <p class="text-left">ALUX= $10,000,000</p>
                    <h1><?php echo $question11 ; ?></h1>
                    <p class="text-left">ALUX= $25,000,000</p>
                    <h1><?php echo $question12 ; ?></h1>
                    <p class="text-left"><?php echo $asked12; ?></p>
                    <h1><?php echo $question13 ; ?></h1>
                    <p class="text-left">ALUX = 1,000,000,000</p>
                    <h1><?php echo $question14 ; ?></h1>
                    <p class="text-left"><?php echo $asked14; ?></p>
                    <h1><?php echo $question15 ; ?></h1>
                    <p class="text-left"><?php echo $asked15; ?>.</p>
                    <h1><?php echo $question16 ; ?></h1>

                    <div class="section o-token-distribution d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="o-distribution text-left wow fadeIn">
                                <h3><?php echo $tokenAllocations; ?></h3>

                                <div class="progressbar-block row">
                                    <div class="col-md-6">
                                        <span class="progress-label"><?php echo $tokenValue1; ?></span>
                                        <div class="progress bar-1">
                                            <div class="progress-bar" data-transitiongoal="50"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenValue2; ?></span>
                                        <div class="progress bar-2">
                                            <div class="progress-bar" data-transitiongoal="15"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenValue3; ?></span>
                                        <div class="progress bar-3">
                                            <div class="progress-bar" data-transitiongoal="5"></div>
                                        </div>
                                        <!-- End of .progress -->
                                    </div>
                                    <!-- End of .col-md-6 -->

                                    <div class="col-md-6">
                                        <span class="progress-label"><?php echo $tokenValue4; ?></span>
                                        <div class="progress bar-4">
                                            <div class="progress-bar" data-transitiongoal="2"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenValue5; ?></span>
                                        <div class="progress bar-5">
                                            <div class="progress-bar" data-transitiongoal="10"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenValue6; ?></span>
                                        <div class="progress bar-6">
                                            <div class="progress-bar" data-transitiongoal="18"></div>
                                        </div>
                                        <!-- End of .progress -->
                                    </div>
                                    <!-- End of .col-md-6 -->
                                </div>
                                <!-- End of .progressbar-block -->
                            </div>
                            <!-- End of .o-distribution -->
                        </div>
                        <!-- End of .col-md-5 -->

                        <div class="col-lg-5">
                            <div id="chartdiv" class="token-distribution-chart wow fadeIn"></div>
                        </div>
                        <!-- End of.col-md-7 -->
                    </div>
                    <!-- End of .row -->
                </div>
                <!-- End of .container -->
            </div>
            <!-- End of .token-distribution -->

            <div class="section o-currency-converter d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="o-distribution text-left wow fadeIn">
                                <h3><?php echo $tokenProceeds; ?></h3>

                                <div class="progressbar-block row">
                                    <div class="col-md-6">
                                        <span class="progress-label"><?php echo $tokenProceedsValue1; ?></span>
                                        <div class="progress bar-1">
                                            <div class="progress-bar" data-transitiongoal="40"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenProceedsValue2; ?></span>
                                        <div class="progress bar-2">
                                            <div class="progress-bar" data-transitiongoal="20"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenProceedsValue3; ?></span>
                                        <div class="progress bar-3">
                                            <div class="progress-bar" data-transitiongoal="20"></div>
                                        </div>
                                        <!-- End of .progress -->
                                    </div>
                                    <!-- End of .col-md-6 -->

                                    <div class="col-md-6">
                                        <span class="progress-label"><?php echo $tokenProceedsValue4; ?></span>
                                        <div class="progress bar-4">
                                            <div class="progress-bar" data-transitiongoal="5"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenProceedsValue5; ?></span>
                                        <div class="progress bar-5">
                                            <div class="progress-bar" data-transitiongoal="7"></div>
                                        </div>
                                        <!-- End of .progress -->

                                        <span class="progress-label"><?php echo $tokenProceedsValue6; ?></span>
                                        <div class="progress bar-6">
                                            <div class="progress-bar" data-transitiongoal="8"></div>
                                        </div>
                                        <!-- End of .progress -->
                                    </div>
                                    <!-- End of .col-md-6 -->
                                </div>
                                <!-- End of .progressbar-block -->
                            </div>
                            <!-- End of .o-distribution -->
                        </div>
                        <!-- End of .col-md-5 -->

                        <div class="col-lg-5">
                            <div id="chartdivtwo" class="token-distribution-chart wow fadeIn"></div>
                        </div>
                        <!-- End of.col-md-7 -->
                    </div>
                    <!-- End of .row -->
                </div>
                <!-- End of .container -->
            </div>
            <!-- End of .token-distribution -->

            <h1><?php echo $question17; ?></h1>
            <p class="text-left"><?php echo $asked17content1; ?><a href="<?php echo $asked8content2; ?>"><?php echo $asked8content2; ?></a></p>
            <p class="text-left"><?php echo $asked17content2; ?><a href="https://t.me/LUX_ANT_DIGITAL"><?php echo $asked17content3; ?></a>.</p>
            </div>
            
          </div>
        </div>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p><a href="logout.php?csrf=<?php echo $_SESSION['token'] ?>" class="btn btn-lg btn-secondary"><?php echo $buttonLogout; ?></a></p>
        </div>
      </footer>
    </div>
<?php include "php/footer.php" ?> <!-- Footer & load scripts -->