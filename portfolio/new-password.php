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
    <form class="form-signin" method="GET" action="php/change-success.php">
        <h1 class="h3 mb-3 font-weight-normal">Change Password</h1>
        <label for="inputEmail" class="sr-only" style="::-webkit-input-placeholder{color: black;}">Password</label>
        <input type="password" id="password" class="" placeholder="Enter a new password" name="password" required autofocus>
        
        <input type="password" id="password" class="" placeholder="retype a new password" name="repassword" required>
         <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" class="check" value="remember-me"> Remember me
          </label>
        </div> -->

        <button class="btn btn-lg btn-primary btn-block" name="buttonlogin" type="submit">Submit</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018, Lux Ant Digital</p>
    </form>
  
<?php include "php/footer.php" ?> <!-- Footer & load scripts -->