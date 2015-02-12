<?php
require_once('header.php');
require_once('navbar.php');
?>

<div class="row">
  <div class="large-12 columns">
  <a href="<?php echo $url;?>stocks/" class="button">Back to Stocks</a>
<a href="<?php echo $url;?>dashboard/" class="button">Back to Mission Control</a>
    <?php
      if(isset($error)){
        echo $error;
      }
      echo form_open_multipart('stocks/add/'.$code);
      ?>
      Stock Code:
      <input type="text" name="code" value="<?php echo $code;?>" readonly><br/>

      Item Image:
      <input type="file" name="userfile" size="20" />
      <input type="submit" name="submit" value="save"><br/>
 </div>
</div>


<?php require_once('footer.php') ?>
