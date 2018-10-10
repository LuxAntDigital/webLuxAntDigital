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
    <form class="form-signin" method="GET" action="php/solicitarActivacion.php">
        <img class="mb-4" src="images/logo.png" alt="" width="120">
        <h1 class="h3 mb-3 font-weight-normal">Reeviar Activación</h1>
        <label for="inputEmail" class="sr-only" style="::-webkit-input-placeholder{color: black;}">Email</label>
        <input type="email" id="email" class="" placeholder="<?php echo $email; ?>" name="email" required autofocus>
         <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" class="check" value="remember-me"> Remember me
          </label>
        </div> -->

        <button class="btn btn-lg btn-primary btn-block" name="buttonlogin" type="submit">Enviar solicitud</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018, Lux Ant Digital</p>
    </form>
  
<?php include "php/footer.php" ?> <!-- Footer & load scripts -->