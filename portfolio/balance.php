<?php include "php/config.php" ?> <!-- Database configuration -->
<?php include "content-portfolio/languages/load-lang.php" ?> <!-- Language plugin -->
<?php include "php/head.php" ?> <!-- Head HTML content -->
<?php include "php/bodynav.php" ?> <!-- Header & navbar content -->

      <main>
        <div class="container-fluid">
          
          <div class="row">
          <div class="col-xl-12">
              <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                  <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                                 
                    <?php echo $balanceTitle; ?>

                    </h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped table-responsive w-100 d-block d-md-table text-center">
                  

              
                    <thead>
                        <tr>
                          <td><?php echo $invest; ?></td>
                          <td><?php echo $paymethod; ?></td>
                          <td><?php echo $tokens; ?></td>
                          <td><?php echo $date; ?></td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $ecoBalance = "SELECT compras.monto, divisa.divisa, compras.alux, compras.fecha FROM clientes LEFT JOIN compras ON clientes.id = compras.idcliente LEFT JOIN divisa ON compras.iddivisa = divisa.id LEFT JOIN tokensacumulados ON tokensacumulados.idcompras = compras.id WHERE email = '" . $_SESSION['email'] . "' AND estadooperacion = 1 ORDER BY compras.fecha DESC";
                            $resBalance = mysqli_query($conexion,$ecoBalance);
                            while($listado = mysqli_fetch_array($resBalance)){
                                echo"<tr>
                                     <td>" . $listado['fecha'] . "</td>" . 
                                    "<td>" . $listado['monto'] . "</td>" . 
                                    "<td>" . $listado['divisa'] . "</td>" . 
                                    "<td>" . $listado['alux'] . "</td>
                                    </tr>";
                            }
                            echo "<tr><td></td><td></td><td><p>TOTAL ALUX: </p></td>";
                            $ecoBalance = "SELECT clientes.email, sum(alux) FROM compras LEFT JOIN tokensacumulados ON compras.id = tokensacumulados.idcompras LEFT JOIN clientes ON clientes.id = tokensacumulados.idcliente WHERE clientes.email = '" . $_SESSION['email'] . "'";
                            $resBalance = mysqli_query($conexion,$ecoBalance);
                            while($filaBalance = mysqli_fetch_array($resBalance)){
                                echo "<td>" . $filaBalance['sum(alux)'] . "</td>";
                            }
                            echo "</tr>";

                        ?>
                      </tbody>
                        
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p><a href="logout.php?csrf=<?php echo $_SESSION['token'] ?>" class="btn btn-lg btn-secondary">LOGOUT</a></p>
        </div>
      </footer>
    </div>

<?php include "php/footer.php" ?> <!-- Footer & load scripts -->