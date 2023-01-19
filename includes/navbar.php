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
       // Usuario No Logeado        
        if (!isset($_SESSION['usuario'])) {
      ?>
          
          <a href="<?php echo $URL_WEB ?>login.php" class="btn btn-outline-primary">Iniciar Sesión</a>

      <?php
        // Usuario Logeado
        }else {
      ?>
        <div class="user-info mr-2 ml-2 p-2">
          <p class="text-danger"><?php echo $_SESSION['usuario'] ?></p>
          <img class="rounded-circle avatar" alt="avatar " src="https://www.fakepersongenerator.com/Face/male/male1085267201264.jpg" />
          <a href="<?php echo $URL_WEB ?>logout.php" class="btn btn-outline-danger">Cerrar Sesión</a>
        </div>  
      <?php
        } 
      ?>

     

    </div>
  </div>
</nav>

<main class="container">