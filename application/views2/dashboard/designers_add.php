<?php
require_once('header.php');
require_once('navbar.php');
?>

<div class="row">
  <div class="large-12 columns">
    <?php if(isset($data)){
      echo form_open('dashboard/update/designers');
      foreach ($data->result() as $row) {?>
      Designer Surname:
      <?php echo form_error('surname'); ?>
      <input type="text" name="surname" value="<?php echo $row->surname;?>"><br/>
      Designer Label:
      <?php echo form_error('label'); ?>
      <input type="text" name="label" value="<?php echo $row->label;?>"><br/>
      Designer Full Name:
      <?php echo form_error('full_name'); ?>
      <input type="text" name="full_name" value="<?php echo $row->full_name;?>"><br/>
      <input type="submit" name="submit" value="save"><br/>
      <?php }?>
    <?php   }else{
      echo form_open('dashboard/save/designers');
      ?>
      Designer Surname:
      <?php echo form_error('surname'); ?>
      <input type="text" name="surname" value=""><br/>
      Designer Label:
      <?php echo form_error('label'); ?>
      <input type="text" name="label" value=""><br/>
      Designer Full Name:
      <?php echo form_error('full_name'); ?>
      <input type="text" name="full_name" value=""><br/>
      <input type="submit" name="submit" value="save"><br/>
    <?php }
      if(isset($msg)){echo $msg;}
    ?>
  </div>
</div>
