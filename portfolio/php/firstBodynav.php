<body class="text-center">
<?php include "../content-portfolio/languages/load-lang.php"; ?>
<?php include "config.php"; ?>
    
    <?php
    session_start(); 
    $_SESSION['token'] = md5(uniqid(mt_rand(), true));

    $consultaCab = "SELECT * FROM aluxprice";
                            $resultadoCab = mysqli_query($conexion, $consultaCab);
                            while($filaCab = mysqli_fetch_array($resultadoCab)){
                                // Guardaré en variables de sesión los precios para usarlos en todo el sitio web.
                                $_SESSION['dollar'] = $filaCab['dollar'];
                                $_SESSION['euro'] = $filaCab['euro'];
                                }
                            
                            //echo $_SESSION['dollar'];
    ?>
    
    <style>
      h2, h4, p, ul li, td, label, small{
        color: #1c168f;
      }
      input{
        width: 400px;
        margin-bottom: 10px;
      }
      td{
        font-size: 15px;
      }
    </style>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"> 
      
        <div class="container">
            <header class="blog-header py-3">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-12 col-xs-12 pt-1 d-none d-lg-block">
                     
                    </div>
                    <div class="col-xl-4 col-md-12 col-xs-12 text-center d-none d-lg-block">
                        <img src="images/logo.png"  style="margin-bottom:20px;">
                    </div>
                    <div class="col-xl-4 d-flex justify-content-end align-items-center">
                        
                    </div>
                    <div class="container d-xl-none">
                        <div class="col-xs-6 text-left">
                            <img src="images/logo.png"  style="margin-bottom:20px; height:100px;">
                        </div>
                        <div class="col-xs-6 text-right">
                            
                        <div>
                    </div>
            </header>


