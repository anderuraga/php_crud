<?php include 'includes/cabecera.php' ?>
<?php include 'includes/navbar.php' ?>

  <div class="bg-light p-5 rounded">
    <h1 class="mt-3 mb-3">Listar datos de la BD</h1>


    <p>Usamos el plugin de <a target="_blank" href="https://datatables.net/">datables</a> para la tabla.</p>


    <table id="tpersonas" class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>            
            </tr>
        </thead>
        <tbody>
        <?php            
            foreach($usuarios as $user) {

                  ?>
                    <tr>
                        <td> <?php echo $user["id"] ?> </td>
                        <td> <?php echo $user["nombre"] ?></td>
                        <td> <?php echo $user["apellidos"] ?></td>
                    </tr>

                  <?php   
            }
    ?>
        </tbody>
    </table>
  
  </div>

  <?php include 'includes/footer.php' ?>