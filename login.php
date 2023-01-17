<?php include 'includes/cabecera.php' ?>
<?php include 'includes/navbar.php' ?>
<?php include 'includes/alerta.php' ?>

<div class="bg-light p-5 rounded">
    <form action="loginController.php" method="post">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input value="admin" 
               type="text" class="form-control" 
               name="nom">
        
    </div>
    <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <input value="123" 
               type="password" 
               class="form-control" 
               name="pwd">    
    </div>
    
    <button type="submit" class="btn btn-primary">Iniciar</button>
    </form>
</div>


<?php include 'includes/footer.php' ?>
