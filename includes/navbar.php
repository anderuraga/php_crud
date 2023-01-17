<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $URL_WEB ?>index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $URL_WEB ?>ejercicios/ejercicio1.php">Sesiones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo $URL_WEB ?>ejercicios/ejercicio2.php">Cookies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $URL_WEB ?>ejercicios/ejercicio3.php">Tabla</a>
        </li>
      </ul>
      <form class="d-flex mr-4" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <?php 

        session_start();

        // Usuario No Logeado        
        if (!isset($_SESSION['usuario'])) {
      ?>
          
          <a href="login.php" class="btn btn-outline-primary">Iniciar Sesión</a>

      <?php
        // Usuario Logeado
        }else {

          // mostrar el usuario
          echo "<p class='text-danger'>".$_SESSION['usuario']."</p>";

      ?>

          <a href="logout.php" class="btn btn-outline-danger">Cerrar Sesión</a>
      <?php
        } 
      ?>

     

    </div>
  </div>
</nav>

<main class="container">