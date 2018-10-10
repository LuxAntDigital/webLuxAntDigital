<?php include "php/config.php" ?> <!-- Database configuration -->
<?php include "content-portfolio/languages/load-lang.php" ?> <!-- Language plugin -->
<?php include "php/head.php" ?> <!-- Head HTML content -->
<?php include "php/firstBodynav.php" ?> <!-- Header & navbar content -->
<?php include "php/APIcoinlist.php" ?>
<?php
    if(isset($_GET['id'])){
        $_SESSION['referral'] = $_GET['id'];
    }
    else{
        echo '
            <script>
                window.location = "../index.php";
            </script>
        ';
    }
?>
<main>
    <style>
        input{
            color: black;
        }

        .info{
            color: white;
        }
        h1, h2, h3, h4, h5, h6{
            color: #1c168f;
        }
        label{
            display: inline-block;
            width: 125px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal" style="color: #1c168f;"><?php echo $referralTitle; ?></h4>
                        </div>
                        <div class="card-body text-left">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                <form id="comprar" method="POST" action="">
                                    <h5><?php echo $referralRegister; ?></h5>
                                    <label for="inputName" class=""><?php echo $name; ?></label>
                                    <input type="text" class="center" id="fullname" name="fullname" class="" placeholder="<?php echo $name; ?>" style="margin-bottom: 10px;" required autofocus>
                                    <br>
                                    <label for="inputName" class=""><?php echo $lname; ?></label>
                                    <input type="text" id="lastname" name="lastname" class="" placeholder="<?php echo $subName; ?>" style="margin-bottom: 10px;">
                                    <br>
                                    <label for="inputEmail" class=""><?php echo $email; ?></label>
                                    <input type="email" id="email" name="email" class="" placeholder="<?php echo $email; ?>" name = "email" style="margin-bottom: 10px;" required>
                                    <br>
                                    <label for="inputPassword" class=""><?php echo $password; ?></label>
                                    <input type="password" id="password" name="password" class="" placeholder="<?php echo $password; ?>" name = "password" style="margin-bottom: 10px;" required>
                                    <br>
                                    <label for="inputPassword" class=""><?php echo $retype; ?></label>
                                    <input type="password" id="repite-password" class="" placeholder="<?php echo $retype; ?>" name = "repite-password" style="margin-bottom: 10px;" required>
                                    <br>
                                    <label for="inputWallet" class="" ><?php echo $wallet; ?></label>
                                    <input type="text" id="etherwallet" class="" name="wallet" placeholder="<?php echo $wallet; ?>" name = "ether_wallet" required>
                                    <br>
                                </div>            
                                <div class="col-xl-12 text-center flag-none" style="margin-top:20px;">
                                    <h4><?php echo $importantTitle; ?></h4>
                                </div>

                                <div class="col-xl-3"></div>
                                <div class="col-xl-9 text-left">
                                    <p style="margin-top:-20px;"><?php echo $importantContent1; ?></p>
                                    <p style="margin-top:-20px;"><?php echo $importantContent2; ?></p>
                                    <p style="margin-top:-20px;"><?php echo $importantContent3; ?> <a target="_blank" href="https://www.myetherwallet.com">MyEtherWallet</a>.</p>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    
                                        <div class="col-md-2"></div>
                                        <div class="col-md-10" style="margin-top:15px;">
                                            <p for="famount_token" class="text-center" style="padding-top:20px;"><?php echo $LabelSoldTokens; ?></p>
                                            <span style="color:#1c168f;">ALUX: </span><input type="text" id="tokens" name="tokens" class="col-md-6 text-left onlynumbers" required id="famount_token" placeholder="" value="400" onchange="activarBoton()" >
                                                <select name="divisa" id="divisa" style="height:47px;" onchange="cambiarPasarela()">
                                                    <option id="PAY" value="0" selected>Divisa</option>
                                                    <option id="EUR" value="1">Euro (PayPal)</option>
                                                    <option id="USD" value="2">US Dollar (PayPal)</option>
                                                    <option id="BTC" value="3">Bitcoin</option>
                                                    <option id="ETH" value="4">Ethereum</option>
                                                    <option id="DOGE" value="5">Dogecoin</option>
                                                    <option id="BTCGOLD" value="6">Bitcoin Gold</option>
                                                    <option id="BTCCASH" value="7">Bitcoin Cash</option>
                                                    <option id="LITE" value="8">Litecoin</option>
                                                    <option id="DASH" value="9">Dash</option>
                                                    <option id="ZCASH" value="10">Zcash</option>                                                   
                                                </select>
                                                <button class="btn" onclick="calcular()">Calcular</button>
                                                <p style="text-right"><span style="color:#1c168f;">Total: </span>
                                                <input type="text" name="total" id="print" value="" style="width:250px;" readonly>
                                                <span style="color:#1c168f;" id= "total"></span>
                                                </p>
                                        </div>
                                        <br>
                                        <br>
                                        <?php 
                                            //Variable para controlar la moneda que vamos a utilizar para el pago en PayPal, pago por defecto €:
                                            $_SESSION['moneda'] = 'EUR';
                                        ?>
                                        <script>                    
                                            function cambiarPasarela(){
                                                var pasarela = document.getElementById('divisa').value;
                                                switch(pasarela){
                                                    case "1":
                                                        $('#comprar').attr('action','php/paypalBuy.php');
                                                        <?php $_SESSION['moneda'] = 'EUR'; ?>
                                                        break;
                                                    case "2":
                                                        $('#comprar').attr('action','php/paypalBuy.php');
                                                        <?php $_SESSION['moneda'] = 'USD'; ?>
                                                        break;
                                                    default:
                                                        $('#comprar').attr('action','php/firstBuy.php');
                                                        break;
                                                }

                                            }
                                            function calcular(){
                                                var alux = document.getElementById('tokens').value;
                                                aluxToEuro = alux * <?php echo $_SESSION['euro']; ?>;
                                                aluxToDollar = alux * <?php echo $_SESSION['dollar']; ?>;
                                                var divisa = document.getElementById('divisa').value;
                                                switch(divisa){
                                                    case "1": 
                                                        document.getElementById('print').value = aluxToEuro + " €";
                                                        break;
                                                    case "2":
                                                        document.getElementById('print').value = "$" + aluxToDollar;
                                                        break;
                                                    case "3":
                                                        var bitcoin = <?php echo $btcPrice; ?>;
                                                        var resultado = aluxToDollar / bitcoin;
                                                        document.getElementById('print').value = resultado + " BTC";
                                                        //Esta sentencia imprime entre cualquier par de etiquetas html que queramos, pero hacia falta imprimir en un input, para eso solo sirve value.
                                                        //document.getElementById('print').innerHTML = resultado + " BTC";
                                                        break;
                                                    case "4":
                                                        var ethereum = <?php echo $ethPrice; ?>;
                                                        var resultado = aluxToDollar / ethereum;
                                                        document.getElementById('print').value = resultado + " ETH";
                                                        break;
                                                    case "5":
                                                        var dogecoin = <?php echo $dogePrice; ?>;
                                                        var resultado = aluxToDollar / dogecoin;
                                                        document.getElementById('print').value = resultado + " DOGE";
                                                        break;
                                                    case "6":
                                                        var bitcoinGold = <?php echo $btgPrice; ?>;
                                                        var resultado = aluxToDollar / bitcoinGold;
                                                        document.getElementById('print').value = resultado + " BTG";
                                                        break;
                                                    case "7":
                                                        var bitcoinCash = <?php echo $bchPrice; ?>;
                                                        var resultado = aluxToDollar / bitcoinCash;
                                                        document.getElementById('print').value = resultado + " BCH";
                                                        break;
                                                    case "8":
                                                        var litecoin = <?php echo $ltcPrice; ?>;
                                                        var resultado = aluxToDollar / litecoin;
                                                        document.getElementById('print').value = resultado + " LTC";
                                                        break;
                                                    case "9":
                                                        var dash = <?php echo $dashPrice; ?>;
                                                        var resultado = aluxToDollar / dash;
                                                        document.getElementById('print').value = resultado + " DASH";
                                                        break;
                                                    case "10":
                                                        var zcash = <?php echo $zecPrice; ?>;
                                                        var resultado = aluxToDollar / zcash;
                                                        document.getElementById('print').value = resultado + " ZEC";
                                                        break;   
                                                }

                                            }
                                                       
                                                function activarBoton(){
                                                    var cantidadMinima = document.getElementById('tokens').value;
                                                    parseInt(cantidadMinima, 10);
                                                    if(cantidadMinima < 400){
                                                        $(document).ready(function(){
                                                            $('#botonFinal').attr('disabled','true');
                                                        });
                                                    }
                                                    else{
                                                        $(document).ready(function(){
                                                            $('#botonFinal').removeAttr("disabled");
                                                        });
                                                    }
                                                    
                                                }            
                                            
                                        </script>
                                                    
                                        
                                </div>
                            </div>
                            <div class="inner text-center">
                                            <h4 class=""><?php echo $buyInstructionsTitle; ?></h4>
                                            <p class=""><?php echo $buyInstructions1; ?><br><?php echo $buyInstructions2; ?></p>
                                            <input class="" type="checkbox" id="accept" required style="height:auto; width:auto; margin-right:5px; display:inline;">
                                            <label class="" for="accept" style="margin-right:5px; display:inline;"><?php echo $textTerms1; ?> <a href="#" data-toggle="modal" data-target="#terms-modal"><?php echo $linkTerms1; ?></a><?php echo $textTerms2; ?><a href="#" data-toggle="modal" data-target="#privacy-modal"><?php echo $linkTerms2; ?></a></label>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" id="botonFinal" name="submitPayment" class="btn" value="<?php echo $buyButton;?>">
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    


    </div>
</main>

</div>

<?php include "php/footer.php" ?> <!-- Footer & load scripts -->