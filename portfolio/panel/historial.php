<?php require "includes/head.php" ?>
<body>
<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">PANEL DE ADMINISTRACIÓN</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="index.php">OPERACIONES PENDIENTES</a>
        <a class="nav-link active" href="historial.php">HISTORIAL</a>
        <a class="nav-link" href="referral.php">REFERRAL</a>
        <a class="nav-link" href="#">Cerrar Sesión</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h3 class="cover-heading">Listado de Operaciones pendientes de verificar</h3>
    <table class="table-hover">
      <thead>
        <tr>
          <td><p>Titular</p></td>
          <td><p>Email</p></td>
          <td><p>Fecha de Operación</p></td>
          <td><p>Concepto</p></td>
          <td><p>Divisa</p></td>
          <td><p>Tokens Comprados</p></td>
          <td><p>Referral Acumulado</p></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><p>Pepe Ejemplo Primero</p></td>
          <td><p>pepe@pepemail.com</p></td>
          <td><p>12/08/2018</p></td>
          <td><p>1200</p></td>
          <td><p>$</p></td>
          <td><p>3500 ALUX</p></td>
          <td><p>0,25 ALUX</p></td>
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