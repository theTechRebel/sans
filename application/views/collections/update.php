<?php
require_once('header.php');
require_once('navbar.php');
?>

<div class="row">
  <div class="large-12 columns">
  <a href="<?php echo $url;?>stocks/" class="button">Back to Stocks</a>
<a href="<?php echo $url;?>dashboard/" class="button">Back to Mission Control</a>
    <?php if(isset($data)){
      if(isset($error)){
        echo $error;
      }
      echo form_open_multipart('stocks/update/');
        foreach ($data->result() as $row) {?>
      Item Code:
      <?php echo form_error('code'); ?>
      <?php echo $row->code;?><br/><br/>
      <input type="hidden" name="code" value="<?php echo $row->code; ?>">
      Item Price:
      <?php echo form_error('price'); ?>
      <input type="text" name="price" value="<?php echo $row->price?>"><br/>
      Item Name:
      <?php echo form_error('item_name'); ?>
      <input type="text" name="item_name" value="<?php echo $row->item_name?>"><br/>
      Item Size:
      <?php echo form_error('size'); ?>
      <input type="text" name="size" value="<?php echo $row->size;?>"><br/>
      Item Quantity:
      <?php echo form_error('quantity'); ?>
      <input type="text" name="quantity" value="<?php echo $row->quantity;?>"><br/>
      <input type="submit" name="submit" value="save"><br/>
    <?php }  }else{
      echo form_open_multipart('stocks/add/');
      ?>
      Item Image:
      <input type="file" name="userfile" size="20" />
      Item Code:
      <input type="text" name="code" value=""><br/>
      Item Price:
       <?php echo form_error('price'); ?>
      <input type="text" name="price" value=""><br/>
      Item Size:
      <?php echo form_error('size'); ?>
      <input type="text" name="size" value=""><br/>
      Item Name:
      <?php echo form_error('item_name'); ?>
      <input type="text" name="item_name" value=""><br/>
      Item Quantity:
      <?php echo form_error('quantity'); ?>
      <input type="text" name="quantity" value=""><br/>
      Item Designer:
      <select name="designer">
      <?php foreach ($designers->result() as $row) {
      ?>
      <option value="<?php echo $row->surname;?>"><?php echo $row->full_name?></option>
       <?php }?>
    </select>
      Item Sex:
      <select name="sex">
        <option value="1">Male</option>
        <option value="0">Female</option>
        <option value="2">UniSex</option>
      </select>
      <input type="submit" name="submit" value="save"><br/>
    <?php }
      if(isset($msg)){echo $msg;}
    ?>
  </div>
</div>


<?php require_once('footer.php') ?>
