<?php include "php/config.php" ?> <!-- Database configuration -->
<?php include "content-portfolio/languages/load-lang.php" ?> <!-- Language plugin -->
<?php include "php/head.php" ?> <!-- Head HTML content -->
<?php include "php/bodynav.php" ?> <!-- Header & navbar content -->
<?php include "php/APIcoinlist.php" ?>

<main>
    <div class="container-fluid">      
        <div class="row">
            <div class="col-xl-12">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal" style="color: #1c168f;"><?php echo $buyTitle ?></h4>
                        </div>
                        <div class="card-body text-left">

                            <p class="text-center"><?php echo $buyTextInstructions1; ?></p>
                            <div class="text-center">
                            <h4>
                                <?php echo $amountSend1; ?>
                                <?php
                                    //calculadora final
                                    
                                    echo $formulaFinal;
                                    //echo $_POST['price'];
                                    $moneda = $_POST['divisa'];
                                    switch($moneda){
                                        case 1: 'Euro';
                                            $aluxValue = $_SESSION['euro'];
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint = ' €';
                                        break;
                                        case 2: 'Dollar';
                                            echo $monedaPrint = '$';
                                            $aluxValue = $_SESSION['dollar'];
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                        break;
                                        case 3: 'Bitcoin';
                                            $monedaPrint = ' Bitcoins';
                                            $monedaQR = 'btc_qrcode.png';
                                            $monedaWallet = '3LKqJntTVE21e4ApKttgpYUV25HWTrBuM7';
                                            $monedaAlt = 'Bitcoin QR';
                                            $aluxValue = $_SESSION['dollar'] / $btcPrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                        case 4: ' Ethereum';
                                            $monedaPrint = ' Ethereums';
                                            $monedaQR = 'eth_qrcode.jpg';
                                            $monedaWallet = '0xe600a6958874991479c9dfcEAd4340Ae43963334';
                                            $monedaAlt = 'Ethereum QR';
                                            $aluxValue = $_SESSION['dollar'] / $ethPrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                        case 5: ' Dogecoin';
                                            $monedaPrint = ' Dogecoins';
                                            $monedaQR = 'dogecoin_qrcode.png';
                                            $monedaWallet = 'DSExWMXTLDVLoKYbragHGjFjJqwAwKVsmM';
                                            $monedaAlt = 'Dogecoin QR';
                                            $aluxValue = $_SESSION['dollar'] / $dogePrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                        case 6: ' Bitcoin Gold';
                                            $monedaPrint = ' Bitcoins Gold';
                                            $monedaQR = 'btcGold_qrcode.png';
                                            $monedaWallet = 'AWPpUCeCmSVwYxq6yp64TyNd6CW8icKeEj';
                                            $monedaAlt = 'Bitcoin Gold QR';
                                            $aluxValue = $_SESSION['dollar'] / $btgPrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                        case 7: ' Bitcoin Cash';
                                            $monedaPrint = ' Bitcoins Cash';
                                            $monedaQR = 'btcCash_qrcode.png';
                                            $monedaWallet = 'qp4snv2uc3cpuy83kl8vlwv47hdtjn9z5qg0r0c90s';
                                            $monedaAlt = 'Bitcoin Cash QR';
                                            $aluxValue = $_SESSION['dollar'] / $bchPrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                        case 8: ' Litecoin';
                                            $monedaPrint = ' Litecoins';
                                            $monedaQR = 'litecoin_qrcode.png';
                                            $monedaWallet = 'MQLZFMQfYhtPn9ujimUT8DrknLnVf8VZYU';
                                            $monedaAlt = 'Litecoin QR';
                                            $aluxValue = $_SESSION['dollar'] / $ltcPrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                        case 9: ' Dash';
                                            $monedaPrint = ' Dash';
                                            $monedaQR = 'dash_qrcode.png';
                                            $monedaWallet = 'XjWmdwgPKXZYogsr22vAeq8p9hoiHVHQRy';
                                            $monedaAlt = 'Dash QR';
                                            $aluxValue = $_SESSION['dollar'] / $dashPrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                        case 10: ' Zcash';
                                            $monedaPrint = ' Zcash';
                                            $monedaQR = 'zcash_qrcode.png';
                                            $monedaWallet = 't1VsikoXayitacER74rwJNhDiNgjThwWwwv';
                                            $monedaAlt = 'Zcash QR';
                                            $aluxValue = $_SESSION['dollar'] / $zecPrice;
                                            $totalPrice = $_POST['tokens'] * $aluxValue;
                                            echo $totalPrice;
                                            echo $monedaPrint;
                                        break;
                                    }
                                ?>
                                <?php echo $amountSend2; ?>
                                <?php echo htmlentities($_POST['tokens']) . " " . $amountSend3; ?>
                                <?php                                 
                                    //Guardar en variables de sesión los datos para siguiente paso
                                    $_SESSION['tokens'] = $_POST['tokens'];
                                    $_SESSION['price'] = $_POST['price'];
                                    $_SESSION['moneda'] = $moneda;
                                    $_SESSION['total'] = $totalPrice;

                                    

                                ?>
                            </h4>
                            </div>
                            <p class="text-center"><?php echo $buyTextInstructions2; ?></p>
                            
                            <p class="text-center" style="font-size:22px; margin:30px 0 20px 0;"><img src="images/QR/<?php echo $monedaQR; ?>" alt="<?php echo $monedaAlt; ?>" style="width:150px;"></p>
                            <p class="text-center" style="font-size:22px;"><?php echo $monedaWallet; ?></p>

                            <br>
                            <br>
                            <br>

                            <div class="text-center">
                                <p><?php echo $finally; ?></p>
                                <p><?php echo $cancelPay; ?><p>
                            
                                <form name="finish" method="POST" action="php/purchaseBuy.php">
                                    <input type="submit" class="btn" value="<?php echo $buttonFinish; ?>">
                                </form>
                                <a href="buy.php"><button class="btn"><?php echo $buttonCancel; ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="mastfoot mt-auto">
    <div class="text-left">
        <h2 style="color:white;"><?php echo $moreInfoTitle; ?></h2>
        <p style="color:white;"><?php echo $moreInfoText1; ?></p>
        <p style="color:white;"><?php echo $moreInfoText2; ?></p>
        <p style="color:white;"><?php echo $moreInfoText3; ?></p>
    </div>
    <div class="inner">
        <p><a href="logout.php?csrf=<?php echo $_SESSION['token'] ?>" class="btn btn-lg btn-secondary"><?php echo $buttonLogout; ?></a></p>
    </div>
</footer>

<?php include "php/footer.php" ?> <!-- Footer & load scripts -->
