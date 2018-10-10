<?php include "php/config.php" ?> <!-- Database configuration -->
<?php include "content-portfolio/languages/load-lang.php" ?> <!-- Language plugin -->
<?php include "php/head.php" ?> <!-- Head HTML content -->
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

<form class="form-signin" method="GET" action="php/recoverPass.php">
      <h1 class="h3 mb-3 font-weight-normal">Enter your email:
      </h1>
      
      <label for="inputName" class="sr-only">Email</label>
      
      <input type="email" placeholder="" id="email" class="" name = "email"  style="margin-bottom: 10px;" required autofocus>

      <button class="btn btn-lg btn-primary btn-block" name = "recovery" value="ok" type="submit">Send E-mail </button>

    </form>

<?php include "php/footer.php" ?> <!-- Footer & load scripts -->