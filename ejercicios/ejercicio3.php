<?php session_start(); ?>
<?php include '../includes/cabecera.php' ?>
<?php include '../includes/navbar.php' ?>

  <div class="bg-light p-5 rounded">
    <h1 class="mt-3 mb-3">Listar datos de la BD</h1>




    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>            
            </tr>
        </thead>
        <tbody>
        <?php
            
              include '../bd/conexion.php';

              $sql = "SELECT id, nombre, apellidos FROM usuarios ORDER BY nombre ASC;";
              // ejecuta la SQL y obtenermos resultados
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // recorremos uno a uno todos los resultados de cada fila == $row
                while($row = $result->fetch_assoc()) {

                  ?>
                    <tr>
                        <td> <?php echo $row["id"] ?> </td>
                        <td> <?php echo $row["nombre"] ?></td>
                        <td> <?php echo $row["apellidos"] ?></td>
                    </tr>

                  <?php                  
                 
                }
              } else {
                echo "0 results";
              }
              $conn->close();
    ?>
           
        </tbody>
    </table>
  
  </div>

  <?php include '../includes/footer.php' ?>
