<!DOCTYPE html>
<?php require 'content/languages/load-lang.php' ?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo $language; ?>">
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122864661-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122864661-1');
    </script>

    <!-- Basic metas
    ======================================== -->
    <meta charset="utf-8">
    <meta name="author" content="Lux Ant Digital">
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="keywords" content="<?php echo $metaKeywords; ?>">

    <!-- Mobile specific metas
    ======================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Page Title
    ======================================== -->
    <title><?php echo $headTitle; ?></title>


    <?php require 'content/libraries/favicons.php' ?>
    <?php require 'content/libraries/css.php' ?>
    <?php include 'content/addons/popup.php' ?> 

</head>


<!-- body starts
============================================ -->

<body>
    <?php include 'content/addons/preloader.php' ?>
    <?php include 'content/addons/body-overlays.php' ?>

    <!-- navbar starts
============================================ -->
    <?php require 'content/sections/navbar.php' ?>


    <!-- Page-wrapper starts - Estructura del sitio -->
    <div class="page-wrapper crypto-onepage">
        <!-- banner starts
        ============================================ -->
        <div id="banner" class="section c-onepage-banner d-flex align-items-center">

            <?php require 'content/sections/banner.php' ?>
            <?php require 'content/sections/partners.php' ?>

        </div>
        <!-- End of .banner -->

        <!-- benifits-of-solution starts
        ============================================ -->
        <?php require 'content/sections/beneficts.php' ?>

        <!-- c-onepage-product starts
        ============================================ -->
        <?php require 'content/sections/services.php' ?>

        <!-- c-onepage-roadmap starts
        ============================================ -->
        <?php require 'content/sections/roadmap.php' ?>

        <!-- Advantages -->
        <!-- ========== -->
        <?php require 'content/sections/advantages.php' ?>

        <!-- c-onepage-about starts
        ============================================ -->
        <?php require 'content/sections/about.php' ?>

            <!-- c-onepage-team starts
            ============================================ -->
            <?php require 'content/sections/team.php' ?>
        </div>
        <!-- End of #onepage-about -->

        <!-- c-onepage-roadmap starts
        ============================================ -->
        <?php require 'content/sections/tokenDistribution.php' ?>

        <!-- c-onepage-roadmap starts
        ============================================ -->
        <?php require 'content/sections/tokenPriceTable.php' ?>

        <!-- c-onepage-roadmap starts
        ============================================ -->
        <?php require 'content/sections/contact.php' ?>

        <!-- c-onepage-roadmap starts
        ============================================ -->
        <?php require 'content/sections/partners.php' ?>

                
        <!-- Newsletter 
        ============================================ -->
        <?php //require 'content/sections/newsletter.php' ?>
                
        <!-- Footer
        ============================================ -->
        <?php require 'content/sections/footer.php' ?>

    </div>
    <!-- End of .page-wrapper -->

    <!-- Terms and Conditions Modal -->
    <?php include 'content/modals/termsAndConditions.php' ?>
    
    <!-- Privacy Modal -->
    <?php include 'content/modals/privacyPolicy.php' ?>


    <!-- Disclaimer Modal -->
    <?php include 'content/modals/disclaimer.php' ?>


    <!-- Downloads Modal -->
    <?php include 'content/modals/downloads.php' ?>



    <?php include 'content/addons/popupContent.php' ?>




    <!-- Javascripts
    ======================================= -->

    <!-- Cookies -->
    <?php require 'content/addons/cookies.php' ?>

    <!-- Chat -->
    <?php include 'content/addons/chat.php' ?>

    <?php require 'content/libraries/javascript.php' ?>
</body>

</html>