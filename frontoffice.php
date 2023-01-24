<?php 
session_start();
include 'includes/cabecera.php'; 
include 'includes/navbar.php';
include 'includes/alerta.php';

// recoger al usuario de sesion
$usuario = $_SESSION['usuario'];
//var_dump($usuario);
?>



  <div class="bg-light p-5 rounded">
    <h1>Tu Panel</h1>

    <div class="row">

      <div class="col border border-primary">
        <h2>Tus Datos</h2>
        <p><b>Id:</b> <?php echo $usuario['id'] ?></p>
        <p><b>Nombre:</b> <?php echo $usuario['nombre'] ?></p>
        <p><b>Apellidos:</b> <?php echo $usuario['apellidos'] ?></p>
        <p><b>Nick:</b> <?php echo $usuario['nick'] ?></p>
      </div>

      <div class="col border border-primary">
        <h2>Cambiar Contraseña</h2>

        <form action="cambiarPasController.php" method="post">

            <div class="mb-3">                
                <input type="password" placeholder="Contraseña Antigua" class="form-control" name="pwdold">    
            </div>
            <div class="mb-3">                
                <input type="password" placeholder="Contraseña Nueva" class="form-control" name="pwd1">    
            </div>
            <div class="mb-3">                
                <input type="password" placeholder="Repite contraseña nueva" class="form-control" name="pwd2">    
            </div>

            <button type="submit" class="btn btn-primary">Cambiar</button>

        </form>
      </div>

    </div>
    

    

  </div> 

  <?php include 'includes/footer.php' ?>
