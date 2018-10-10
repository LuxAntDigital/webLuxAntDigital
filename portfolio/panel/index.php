<?php require "includes/head.php" ?>
<?php require_once('../php/config.php'); ?>
<?php 
  session_start();
  require "php/security.php" 
?>
<body>
<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">PANEL DE ADMINISTRACIÓN</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="index.php">OPERACIONES PENDIENTES</a>
        <a class="nav-link" href="historial.php">HISTORIAL</a>
        <a class="nav-link" href="referral.php">REFERRAL</a>
        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
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
          <td><p>Tokens Comprados</p></td>
          <td><p>Estado</p></td>
          <td><p>Acción</p></td>
        </tr>
      </thead>
      <tbody>
      <?php
        $consultaPagos = 'SELECT compras.id AS idpedido, nombre, apellidos, email, fecha, monto, divisa, alux, estadooperacion FROM compras LEFT JOIN clientes ON clientes.id = compras.idcliente LEFT JOIN divisa ON divisa.id = compras.iddivisa ORDER BY fecha DESC';
        $resultadoPagos = mysqli_query($conexion,$consultaPagos);
        while($compras = mysqli_fetch_array($resultadoPagos)){
          $estado = $compras['estadooperacion'];
          switch($estado){
            case '0':
              $color = 'red';
              $status = 'Pendiente';
              break;
            case '1':
              $color = 'green';
              $status = 'Verificada';
              break;
            case '2':
              $color = 'yellow';
              $status = 'cancelada';
              break;
          }

          echo '
            <tr style="color:'. $color . '">
              <td>' . $compras['nombre'] . $compras['apellidos'] . '</td>
              <td>' . $compras['email'] . '</td>
              <td>' . date('d/m/Y',$compras['fecha']) . '</td>
              <td>' . $compras['monto'] . " " . $compras['divisa'] . '</td>
              <td>' . $compras['alux'] . ' ALUX</td>
              <td>' . $status . '</td>
              <td><a href="php/validar.php?id=' . $compras['idpedido'] . '"><button type="button" class="btn btn-success">Verificar</button></a></td>
              <td><a href="php/cancelar.php?id=' . $compras['idpedido'] . '"><button type="button" class="btn btn-danger">Cancelar</button></a></td>
              <td><a href="php/avisar.php?id=' . $compras['idpedido'] . '"><button type="button" class="btn btn-info">Enviar aviso</button></a></td>
            </tr>
          ';        
        }
      mysqli_close($conexion);
      ?>

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