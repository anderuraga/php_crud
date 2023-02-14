<?php 

if(!isset($_SESSION)) {
  session_start();
}

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
        <h2><b>Id:</b> <?php echo $usuario['id'] ?> <b>Nick:</b> <?php echo $usuario['nick'] ?></h2>
        
        <form action="cambiarDatosController.php" method="post">
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $usuario['nombre'] ?>" name="nombre" class="form-control" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $usuario['apellidos'] ?>" name="apellidos" class="form-control" >
            </div>
          </div>
         
          <button type="submit" class="btn mb-2 btn-outline-primary">Modifica tu nombre y apellidos</button>
        </form>

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

            <button type="submit" class="btn mb-2 btn-outline-primary">Cambiar</button>

        </form>
      </div>

    </div>

    <div class="row">

    <div class="col border border-danger mt-2">
        <h2 class="text-danger">Danger Zone</h2>
        <p class="fw-semibold">CUIDADO, esta acción no es reversible.</p>
        <p>Si deseas dar de baja tu usuario, escribe tus apellidos y pulsa el botón.</p>        
        <form action="eliminarController.php" method="post">
            <div class="mb-3">                
                <input type="text" 
                       placeholder="Escribe aquí tus apellidos" 
                       class="form-control" name="apellidos"
                       required >    
            </div>           
            <button type="submit" class="btn mb-2 btn-outline-danger">Darse de baja</button>
        </form>
      </div>
    </div>
    

    

  </div> 

  <?php include 'includes/footer.php' ?>
