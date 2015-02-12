<?php
require_once('header.php');
require_once('navbar.php');
?>

<div class="row">
  <div class="large-6 columns panel">
    <u>Order Image:</u><br/><?php echo $data->row('pic'); ?>
  </div>

  <div class="large-6 columns panel">
    <u>Price:</u> <?php echo $data->row('price'); ?> <br/><br/>
    <u>Size:</u> <?php echo $data->row('size'); ?> <br/><br/>
    <u>Quantity:</u> <?php echo $data->row('quantity'); ?> <br/><br/>
  </div>
</div>

<?php require_once('footer.php') ?>
