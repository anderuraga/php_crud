<?php session_start(); ?>
<?php include '../includes/cabecera.php' ?>
<?php include '../includes/navbar.php' ?>

<div class="bg-light p-5 rounded">
  <h1>Sessiones</h1>
  <p>Crear Sesiones en PHP. En en lenguaje PHP, las sesiones se crean mediante el uso de la función
    <b>session_start()</b>. Las sesiones son muy usadas en el mundo del internet y nos sirven para almacenar datos.
    <strong>Sin embargo, estas son recordadas en otras páginas sin necesidad de volver a solicitarlos.</strong></p>
  <p>Esto permite crear sesiones personalizadas para cada usuario que accede a nuestra página web. Las Sesiones permiten
    almacenar datos en un array llamado <code class=" prettyprinted" style=""><span class="pln">$_SESSION</span></code>
    <strong>que estará activo y accesible para todas las páginas que tú quieras darle tu sesión.</strong></p>
  <p>Para destruir todos los datos de la session se usa <b>session_destroy();</b></p>


  <h2>Diferencias entre Sesiones y Cookies</h2>

  <ul>
    <h3>Cookies</h3>
    <li>Las cookies nos permiten guardar información en el navegador web haciendo uso de
      (<strong>nombre=valor)</strong>, esta información son enviados al servidor en cada petición.</li>
    <li>En pocas palabras las cookies es un método que permite guardar información en el disco duro del ordenador
      <strong>(cliente)</strong> para recuperarla más adelante.</li>
    <li>Ahora, hablando de seguridad, los usos de cookies no son recomendadas para almacenar información sensible puesto
      que es información enviada por el cliente<strong> (y puede ser alterada por terceros)</strong> y cualquier dato
      importante debe ser siempre tratado con la mayor seguridad posible.</li>
  </ul>

  <ul>
    <h3>Sessiones</h3>
    <li>Por otro lado, en las sesiones es diferente, la información se crea y se mantiene en el servidor hasta que se
      cierra la sesión, esto puede ocurrir por intervención del usuario o por tiempo de expiración designada.</li>
    <li><strong>Una sesión en <a title="Ventajas y desventajas del lenguaje PHP"
          href="https://www.baulphp.com/ventajas-y-desventajas-del-lenguaje-php/" target="_blank" rel="noopener">PHP</a>
        (al igual que una cookie) crea un archivo y se almacena en el ordenador.</strong></li>

    <li>Si inspecciones el código en chrome con las herramientas de desarrollador, podras ver que siempre se crea una session nueva. La puedes encontrar en Appliation/Storage/cookies con el nombre 
          <code class=" prettyprinted" style=""><span style="font-size: 10.0pt;"><span class="pln">PHPSESSID</span></code></li>    
    <li>El archivo temporal se determina en la configuración del fichero <code class=" prettyprinted" style=""><span
          style="font-size: 10.0pt;"><span class="pln">php</span><span class="pun">.</span><span
            class="pln">ini</span></span></code>, a través de <code class=" prettyprinted" style=""><span
          style="font-size: 10.0pt;"><span class="pln">session</span><span class="pun">.</span><span
            class="pln">save_path</span></span></code>.</li>
            
  </ul>

</div>

<?php include '../includes/footer.php' ?>