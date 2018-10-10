<?php include "php/config.php" ?> <!-- Database configuration -->
<?php include "content-portfolio/languages/load-lang.php" ?> <!-- Language plugin -->
<?php include "php/head.php" ?> <!-- Head HTML content -->

  <body class="text-center">
  <style>
    input {
	width: 100%;
	background-color: #1a1391;
	border: 1px solid #342db3;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	border-radius: 5px;
}
  </style>
    <form class="form-signin" method="post" action="php/registerFinish.php">
      <img class="mb-4" src="images/logo.png" alt="" width="120">
      <h1 class="h3 mb-3 font-weight-normal"><?php echo $registerTitle; ?></h1>
      
      <label for="inputName" class="sr-only"><?php echo $name; ?></label>
      <input type="text" id="fullname" name="fullname" class="" placeholder="<?php echo $name; ?>" style="margin-bottom: 10px;" required autofocus>
      <label for="inputName" class="sr-only"><?php echo $name; ?></label>
      <input type="text" id="lastname" name="lastname" class="" placeholder="<?php echo $subName; ?>" style="margin-bottom: 10px;">
      <label for="inputEmail" class="sr-only"><?php echo $email; ?></label>
      <input type="email" id="email" name="email" class="" placeholder="<?php echo $email; ?>" name = "email" style="margin-bottom: 10px;" required>
      <label for="inputPassword" class="sr-only"><?php echo $password; ?></label>
      <input type="password" id="password" name="password" class="" placeholder="<?php echo $password; ?>" name = "password" style="margin-bottom: 10px;" required>
      <label for="inputPassword" class="sr-only"><?php echo $repite; ?></label>
      <input type="password" id="repite-password" class="" placeholder="<?php echo $repite; ?>" name = "repite-password" style="margin-bottom: 10px;" required>
      <div class="checkbox mb-3" style="text-align: left">
      <label for="inputWallet" class="sr-only" ><?php echo $wallet; ?></label>
      <input type="text" id="etherwallet" class="" name="wallet" placeholder="<?php echo $wallet; ?>" name = "ether_wallet" required>
      <small><?php echo $infoWallet; ?><a href="https://www.myetherwallet.com" target="_blank">www.myetherwallet.com</a><small>
        <label>
            <input type="checkbox" class="check" value="remember-me" required> <?php echo $termsText1; ?><a href="#" data-toggle="modal" data-target="#terms-modal"><?php echo $termsText2; ?></a>
        </label>
        <label>
            <input type="checkbox" class="check" value="remember-me" required><?php echo $termsText1; ?><a href="#" data-toggle="modal" data-target="#privacy-modal"><?php echo $privacyText; ?></a>
        </label>
      </div>
      <p id="mensaje"></p>
     <button class="btn btn-lg btn-primary btn-block" name = "buttonregister" value="ok" type="submit" id="button"><?php echo $registerButton; ?></button>

    <br>
    <br>
      <p><?php echo $haveAccount; ?></p>
      <a class="btn secondary-btn xs-hidden" href="login.php">Sign In</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2018, Lux Ant Digital</p>
    </form>

    <script>
    $(document).ready(function() {
      $("#button").prop('disabled', true);
      var pass1 = $('[name=password]');
      var pass2 = $('[name=repite-password]');
      var confirmacion = "Passwords if they match";
      var longitud = "The password must be between 6-10 characters (both inclusive)";
      var negacion = "Passwords do not match";
      var vacio = "The password can not be empty";
      
      var span = $('<span></span>').insertAfter(pass2);
      span.hide();
      
      function coincidePassword(){
      var valor1 = pass1.val();
      var valor2 = pass2.val();
      
      span.show().removeClass();
      
      if(valor1 != valor2){
      span.text(negacion).addClass('negacion');	
      $("#button").prop('disabled', true);
      }
      if(valor1.length==0 || valor1==""){
      span.text(vacio).addClass('negacion');
      $("#button").prop('disabled', true);	
      }
      if(valor1.length<6 || valor1.length>10){
      span.text(longitud).addClass('negacion');
      $("#button").prop('disabled', true);
      }
      if(valor1.length!=0 && valor1==valor2){
      span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
      $("#button").prop('disabled', false);
      }
      }
      //ejecuto la función al soltar la tecla
      pass2.keyup(function(){
      coincidePassword();
      });
    });
    </script>

<?php include "php/footer.php" ?> <!-- Footer & load scripts -->
