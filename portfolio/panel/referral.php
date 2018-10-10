<?php require "includes/head.php" ?>
<body>
<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">PANEL DE ADMINISTRACIÓN</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="index.php">OPERACIONES PENDIENTES</a>
        <a class="nav-link" href="historial.php">HISTORIAL</a>
        <a class="nav-link active" href="referral.php">REFERRAL</a>
        <a class="nav-link" href="#">Cerrar Sesión</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h3 class="cover-heading">Historial de Referral</h3>

      <table class="table-hover text-center">
      <thead>
        <tr>
          <td><p>Referral</p></td>
          <td><p>Email</p></td>
          <td><p>Fecha</p></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><p>referral link</p></td>
          <td><p>pepe@pepemail.com</p></td>
          <td><p>12/08/2018</p></td>
        </tr>
      </tbody>
    </table>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Para notificar al administrador de cualquier incidencia haz click <a href="mailto:guillermo@luxantdigitalbank.com">aquí</a>.</p>
    </div>
  </footer>
</div>

</body>
</html>