

<br>
<br>

  <?php if (isset($_GET['msg'])){ ?>
    <div class="alert mt-5 alert-<?php echo $_GET['tipo'] ?> alert-dismissible fade show" role="alert">
      <strong><?php echo $_GET['msg'] ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php } ?>