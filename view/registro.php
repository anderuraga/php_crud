<?php 
session_start(); 

include 'includes/cabecera.php';
include 'includes/navbar.php';
include 'includes/alerta.php';
?>

  <div class="bg-light p-5 rounded">
    <h1>Registrate como nuevo usuario</h1>
   
    <form action="<?php echo $URL_WEB ?>controller/registroController.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input value="" 
                type="text" class="form-control" 
                name="nom">
            
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>        
    </form>


  </div>

<?php include 'includes/footer.php' ?>
