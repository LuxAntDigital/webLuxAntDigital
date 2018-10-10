<?php include "includes/head.php" ?> <!-- Head HTML content -->



  <body class="text-center">
    <style>
        input {
            width: 100%;
            background-color: grey;
            border: 1px solid #342db3;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
        }
    </style>
    <form class="form-signin" method="POST" action="php/loginstart.php">
        <img class="mb-4" src="images/logo.png" alt="" width="120">
        <h1 class="h3 mb-3 font-weight-normal">PANEL DE ADMINISTRACIÓN</h1>
        <label for="inputEmail" class="sr-only" style="::-webkit-input-placeholder{color: black;}">Usuario</label>
        <input type="email" id="email" class="" placeholder="usuario" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="password" class="" placeholder="contraseña" name="password" required>
         <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" class="check" value="remember-me"> Remember me
          </label>
        </div> -->

        <button class="btn btn-lg btn-primary btn-block" name="buttonlogin" type="submit">iniciar sesión</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018, Lux Ant Digital</p>
    </form>
  
<?php include "../php/footer.php" ?> <!-- Footer & load scripts -->