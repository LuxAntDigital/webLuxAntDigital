<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
              <?php include "config.php" ?>

<?php
if (isset($_POST['submitPayment'])) {
    session_start();
    include "emails/avisoCompras.php";
    $dollar = $_SESSION['dollar'];
    $euro = $_SESSION['euro'];
    $divisa = $_POST['divisa'];
    switch($divisa){
        case "1":
            $amount = $_POST['tokens'] * $euro;
            $newAmount = "INSERT INTO compras VALUES (NULL," . $_SESSION['usuario'] . ", '" . date('U') . "', " . $_POST['tokens'] .  ", " . $amount .  ", " . $_POST['divisa'] .  ", '0')";
            $finishInsert = mysqli_query($conexion,$newAmount);
            $divisa = "EUR";
            break;
        case "2":
            $amount = $_POST['tokens'] * $dollar;
            $newAmount = "INSERT INTO compras VALUES (NULL," . $_SESSION['usuario'] . ", '" . date('U') . "', " . $_POST['tokens'] .  ", " . $amount .  ", " . $_POST['divisa'] .  ", '0')";
            $finishInsert = mysqli_query($conexion,$newAmount);
            $divisa = "USD";
            break;
     }    

    $concept = $_POST['tokens'];
    $order = date('ymdHis');
   
 ?>

 <div class="loading">Un momento, por favor</div>

 <form id="realizarPago" action="https://www.paypal.com/cgi-bin/webscr" method="post">
     <input name="cmd" type="hidden" value="_cart" />
     <input name="upload" type="hidden" value="1" />
     <input name="business" type="hidden" value="admin@luxantdigitalbank.com" />
     <input name="shopping_url" type="hidden" value="https://luxantdigitalbank.com/portfolio/finishbuy.php" />
     <input name="currency_code" type="hidden" value="<?php echo $divisa; ?>" />
     <input name="return" type="hidden" value="https://luxantdigitalbank.com/portfolio/buy.php" />
     <input name="notify_url" type="hidden" value="https://luxantdigitalbank.com/portfolio/php/notifyMail.php" />

     <input name="rm" type="hidden" value="2" />
     <input name="item_number_1" type="hidden" value="<?php echo $order; ?>" />
     <input name="item_name_1" type="hidden" value="<?php echo $concept . " ALUX Tokens"; ?>" />
     <input name="amount_1" type="hidden" value="<?php echo $amount; ?>" />
     <input name="quantity_1" type="hidden" value="1" /> 

 </form>
 <script>
 $(document).ready(function () {
     $("#realizarPago").submit();
 });
 </script>
<?php
}   
?>