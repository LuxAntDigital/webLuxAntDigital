<body class="text-center">
<?php include "../content-portfolio/languages/load-lang.php"; ?>
<?php include "config.php"; ?>
<?php include "php/security.php" ?>
    
    <?php
    session_start(); 
    $_SESSION['token'] = md5(uniqid(mt_rand(), true));
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
                        <p style="color:white;">
                            <?php //echo $price;
                            $consultaCab = "SELECT * FROM aluxprice";
                            $resultadoCab = mysqli_query($conexion, $consultaCab);
                            while($filaCab = mysqli_fetch_array($resultadoCab)){
                                // Guardaré en variables de sesión los precios para usarlos en todo el sitio web.
                                $_SESSION['dollar'] = $filaCab['dollar'];
                                $_SESSION['euro'] = $filaCab['euro'];
                                }
                            
                            //echo $_SESSION['dollar'];
                                
                            ?>
                        </p>
                        <p style="color:white;">
                            <?php 
                                echo $welcome . " ";
                                $ecoName = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
                                        $resName = mysqli_query($conexion, $ecoName);
                                        while($filaName = mysqli_fetch_array($resName)){
                                            echo $filaName['nombre'];
                                        }
                            ?>
                        </p>
                    </div>
                    <div class="col-xl-4 col-md-12 col-xs-12 text-center d-none d-lg-block">
                        <img src="images/logo.png"  style="margin-bottom:20px;">
                    </div>
                    <div class="col-xl-4 d-flex justify-content-end align-items-center">
                        <div class="card-body d-none d-lg-block">
                            <div class="countdown">
                                <span id="clock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="container d-xl-none">
                        <div class="col-xs-6 text-left">
                            <img src="images/logo.png"  style="margin-bottom:20px; height:100px;">
                        </div>
                        <div class="col-xs-6 text-right">
                            <small style="color:white; text-align:right;">
                                <?php 
                                    echo $welcome . " "; 
                                    $ecoName = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
                                    $resName = mysqli_query($conexion, $ecoName);
                                    while($filaName = mysqli_fetch_array($resName)){
                                        echo $filaName['nombre'];
                                    }
                                ?>                            
                            </small>
                            <br>
                            <small style="color:white; text-align:right;">
                            <?php
                            //echo $price;
                            //echo $_SESSION['dollar'];
                            ?>
                            </small>
                        <div>
                    </div>
            </header>


    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2" href="buy.php"><?php echo $buttonBuy; ?></a>
            <a class="p-2" href="index.php"><?php echo $buttonProfile; ?></a>
            <a class="p-2" href="balance.php"><?php echo $buttonBalance; ?></a>
            <a class="p-2" href="faq.php">FAQ</a>
        </nav>
    </div>

