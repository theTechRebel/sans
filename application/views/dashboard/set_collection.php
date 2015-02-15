<?php
require_once('header.php');
require_once('navbar.php');
?>

<?php
  foreach($collections->result() as $row){
    $collection_array[] = $row->collection_name;
  }
?>

<div class="row">
  <div class="large-12 columns">
    <?php if(isset($collections)){
      echo form_open_multipart('dashboard/set_collection_image');?>
      Select a Collection:

      <select name="collection_name">
      <?php foreach (array_unique($collection_array) as $row) {?>
      <option value="<?php echo $row;?>"><?php echo $row?></option>
      <?php }?>
      </select><br/>
      Item Image:
      <input type="file" name="userfile" size="20" /><br/>
      Male or Female Collection:
      <select name="sex">
        <option value="m">Male</option>
        <option value="f">Female</option>
      </select>
      <input type="submit" name="submit" value="save"><br/>
    <?php  }else{
      echo form_open_multipart('dashboard/save/stocks');
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
      <input type="submit" name="submit" value="save"><br/>
    <?php }
      if(isset($msg)){echo $msg;}
    ?>
  </div>
</div>


<?php require_once('footer.php') ?>
