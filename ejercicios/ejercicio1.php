<?php include '../includes/cabecera.php' ?>
<?php include '../includes/navbar.php' ?>

  <div class="bg-light p-5 rounded">
    <h1>Sessiones</h1>
    <p>Crear Sesiones en PHP. En en lenguaje PHP, las sesiones se crean mediante el uso de la función <b>session_start()</b>. Las sesiones son muy usadas en el mundo del internet y nos sirven para almacenar datos. <strong>Sin embargo, estas son recordadas en otras páginas sin necesidad de volver a solicitarlos.</strong></p>
    <p>Esto permite crear sesiones personalizadas para cada usuario que accede a nuestra página web. Las Sesiones permiten almacenar datos en un array llamado <code class=" prettyprinted" style=""><span class="pln">$_SESSION</span></code> <strong>que estará activo y accesible para todas las páginas que tú quieras darle tu sesión.</strong></p>
    <p>Para destruir todos los datos de la session se usa <b>session_destroy();</b></p>


    <h2>Diferencias entre Sesiones y Cookies</h2>

  </div>

  <?php include '../includes/footer.php' ?>
