<nav class="c-onepage-navbar navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand page-scroll" href="#banner">
                <img src="images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="toggler-icon-bar bar1"></span>
                <span class="toggler-icon-bar bar2"></span>
                <span class="toggler-icon-bar bar3"></span>
            </button>
            <!-- End of .navbar-toggler -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="onepage-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#features"><?php echo $features; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product"><?php echo $services; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roadmap"><?php echo $roadmap; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><?php echo $about; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team"><?php echo $team; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tokens"><?php echo $tokens; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://luxantdigitalbank.com/blog"><?php echo $blog; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><?php echo $contact; ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="btn secondary-btn" href="https://luxantdigitalbank.com/buy.php?lang=<?php echo $langPanel ?>"><?php echo $buybutton; ?></a>
                    </li>
                    <li class="o-langualge">
                        <div class="dropdown text-xs-right ml-auto">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><?php echo $langSelect; ?></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?lang=en" <?php echo $langHiddenEn; ?>>En</a>
                                <a class="dropdown-item" href="index.php?lang=es" <?php echo $langHiddenEs; ?>>Es</a>
                                <!--<a class="dropdown-item" href="#">Ch</a> -->
                                <a class="dropdown-item" href="http://luxantdigitalbank.ru" <?php echo $langHiddenRu; ?>>Ru</a>
                            </div>
                            <!-- End of .dropdown-menu -->
                        </div>
                        <!-- End of .dropdown -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- End of .container -->
    </nav>
    <!-- End of .navbar -->