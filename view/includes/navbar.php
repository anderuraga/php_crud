<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">

      <?php 
          // Solo pueden ver estos enlaces los Usuarios NO Logeados        
          if (!isset($_SESSION['usuario'])) {
        ?>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo $URL_WEB ?>index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $URL_WEB ?>view/ejercicios/ejercicio1.php">Sesiones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo $URL_WEB ?>view/ejercicios/ejercicio2.php">Cookies</a>
          </li>

        <?php } ?>   

        <?php 
          // Solo pueden ver estos enlaces los Usuarios Logeados        
          if (isset($_SESSION['usuario'])) {
        ?>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $URL_WEB ?>controller/listaController.php">Todos los Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $URL_WEB ?>view/frontoffice.php">Tu Panel</a>
            </li>

         <?php } ?>   

      </ul>


      <?php 
       // Usuario No Logeado        
        if (!isset($_SESSION['usuario'])) {
      ?>
          
          <a href="<?php echo $URL_WEB ?>view/login.php" class="btn btn-outline-primary">Iniciar Sesión</a>

      <?php
        // Usuario Logeado
        }else {
      ?>
        <div class="user-info mr-2 ml-2 p-2">         
          <img class="rounded-circle avatar" alt="avatar " src="<?php echo $URL_WEB ?>resources/images/avatar1.jpg" />
          <a href="<?php echo $URL_WEB ?>controller/logoutController.php" class="btn btn-outline-danger">Cerrar Sesión</a>
        </div>  
      <?php
        } 
      ?>

    </div>
  </div>
</nav>

<main class="container">