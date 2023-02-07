<?php 
include 'includes/cabecera.php';
include 'includes/navbar.php';
include 'includes/alerta.php';
?>

  <div class="bg-light p-5 rounded">
    <h1>Registrate como nuevo usuario</h1>
   
    <form action="<?php echo $URL_WEB ?>controller/registroController.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input value="" type="text" class="form-control" name="nom" palceholder="Tu nombre Completo">            
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input value="" type="text" class="form-control" name="apes" palceholder="Tus dos apellidos">            
        </div>
              
        <div class="mb-3">
            <label class="form-label">Nick</label>
            <input value="" type="text" class="form-control" name="nick" palceholder="Nick o nombre de usuario">            
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input value="" type="password" class="form-control" name="pass1" palceholder="minimo 8 caracteres, usa letras,numeros y signos">            
        </div>
        <div class="mb-3">
            <label class="form-label">Repite Contraseña</label>
            <input value="" type="password" class="form-control" name="pass2">            
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>  

    </form>


  </div>

<?php include 'includes/footer.php' ?>
