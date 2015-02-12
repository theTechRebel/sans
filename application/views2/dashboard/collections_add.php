<?php
require_once('header.php');
require_once('navbar.php');
?>

<div class="row">
  <div class="large-12 columns">
  <?php if(!isset($collections)){
   echo form_open('dashboard/save/collections') ?>

      Select an Item to Add to Collection:
      <select name="code">
      <?php foreach ($items->result() as $row) {?>
      <option value="<?php echo $row->code;?>"><?php echo $row->code?></option>
      <?php }?>
      </select><br/>
      Collection Name:
      <input type="text" name="collection_name" value="">
      Designer:<br/>
      <h3><?php echo $designer;?></h3><br/>
      <input type="hidden" name="designer" value="<?php echo $designer?>">
      <input type="submit" name="submit" value="Save">
      </form>
  <?php }else{

    echo form_open('dashboard/save/collections')?>
    Select a collection:
    <select name="collection_name">
      <?php foreach ($collections->result() as $row) {?>
        <option value="<?php echo $row->collection_name?>"><?php echo $row->collection_name?></option>
      <?php }?>
    </select><br/>
    Select an Item to Add to Collection:
      <select name="code">
      <?php foreach ($items->result() as $row) {?>
      <option value="<?php echo $row->code;?>"><?php echo $row->code?></option>
      <?php }?>
      </select><br/>
       Designer:<br/>
      <h3><?php echo $designer;?></h3><br/>
      <input type="hidden" name="designer" value="<?php echo $designer?>">
      <input type="submit" name="submit" value="save">
      </form>
    <?php }?>
  </div>
</div>
