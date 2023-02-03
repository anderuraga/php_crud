

  <?php if (isset($msg)){ ?>
    <div class="alert mt-1 alert-<?php echo $tipo ?> alert-dismissible fade show" role="alert">
      <strong><?php echo $msg ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php } ?>