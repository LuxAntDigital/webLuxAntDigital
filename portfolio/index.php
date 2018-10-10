<?php include "php/config.php" ?> <!-- Database configuration -->
<?php include "content-portfolio/languages/load-lang.php" ?> <!-- Language plugin -->
<?php include "php/head.php" ?> <!-- Head HTML content -->
<?php include "php/bodynav.php" ?> <!-- Header & navbar content -->

<main>
    <style>
        input {
          color:
        }
    </style>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><?php echo $profileTitle; ?></h4>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">
                            </h2>
                            <ul class="list-unstyled mt-3 mb-4 text-left">
                                <li>
                                    <?php echo $labelName; ?>
                                    <?php
                                        $ecoName = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
                                        $resName = mysqli_query($conexion, $ecoName);
                                        while($filaName = mysqli_fetch_array($resName)){
                                            echo $filaName['nombre'] . " " . $filaName['apellidos'];
                                        }
                                    ?>
                                <li>
                                <li>
                                    <?php echo $labelEmail; ?>
                                    <?php
                                        $ecoEmail = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
                                        $resEmail = mysqli_query($conexion,$ecoEmail);
                                        while($filaEmail = mysqli_fetch_array($resEmail)){
                                            echo $filaEmail['email'];
                                        }
                                    ?>

                                </li>
                                <li>
                                    <?php echo $labelWallet; ?>
                                    <?php   
                                        $ecoWallet = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
                                        $resWallet = mysqli_query($conexion,$ecoWallet);
                                        while($filaWallet = mysqli_fetch_array($resWallet)){
                                            echo $filaWallet['wallet'];
                                        }
                                    ?>
                                </li>
                                <li>
                                    <?php echo $labelBalance; ?>
                                    <?php 
                                        $ecoBalance = "SELECT clientes.email, sum(alux) FROM compras LEFT JOIN tokensacumulados ON compras.id = tokensacumulados.idcompras LEFT JOIN clientes ON clientes.id = tokensacumulados.idcliente WHERE clientes.email = '" . $_SESSION['email'] . "'";
                                        $resBalance = mysqli_query($conexion,$ecoBalance);
                                        while($filaBalance = mysqli_fetch_array($resBalance)){
                                            echo $filaBalance['sum(alux)'];
                                            $total = $filaBalance['sum(alux)'];
                                            if(!isset($total)){
                                                echo "0 ALUX Tokens. ";
                                            }
                                            else{
                                                echo " ALUX Tokens.";
                                            }
                                            
                                        }
                                    ?>
                                </li>
                                <li>
                                    <?php echo $labelAdvantage; ?>                                    
                                    <?php
                                        if($total == 100 && $total < 99 || !isset($total)){
                                            echo "No has obtenido ningún plan";
                                        }
                                        elseif($total > 100 && $total < 10000 || $total == 10000){
                                            echo "BRONCE PLAN";
                                        }
                                        elseif($total > 10000 && $total < 100000 || $total == 100000){
                                            echo "SILVER PLAN";
                                        }
                                        elseif($total > 100000 && $total < 1000000 || $total == 1000000){
                                            echo "GOLD PLAN";
                                        }
                                        elseif($total > 1000000){
                                            echo "ALUX FOREVER PLAN";
                                        }

                                    ?>
                                </li>
                                <li>
                                    <?php echo $labelReferral; ?>
                                    <?php 
                                        $ecoReferral = "SELECT referral FROM `clientes` WHERE email = '" . $_SESSION['email'] . "'";
                                        $resReferral = mysqli_query($conexion,$ecoReferral);
                                        while($filaReferral = mysqli_fetch_array($resReferral)){
                                            echo "https://luxantdigitalbank.com/portfolio/referral.php?id=" . $filaReferral['referral'];
                                        }
                                    ?>
                                </li>
                            </ul>
                            <a href="#" class ="btn" data-toggle="modal" data-target="#edit-profile"><?php echo $buttonEditProfile; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><?php echo $titleKYC; ?></h4>
                        </div>
                        <div class="card-body">
                            <p><?php echo $contentKYC; ?></p>
                            <a href="#" class ="btn" data-toggle="modal" data-target="#kyc"><?php echo $buttonKYC; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>

<footer class="mastfoot mt-auto">
  <div class="inner">
    <p><a href="logout.php?csrf=<?php echo $_SESSION['token'] ?>" class="btn btn-lg btn-secondary"><?php echo $buttonLogout; ?></a></p>
  </div>
</footer>

<?php include "php/footer.php" ?> <!-- Footer & load scripts -->
