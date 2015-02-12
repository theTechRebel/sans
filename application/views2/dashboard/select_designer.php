<?php
require_once('header.php');
require_once('navbar.php');
?>



<div class="row">
<div class="large-6 columns">

<p align="center">
<h3>Create a NEW Collection for</h3><br/>

<?php foreach ($designers->result() as $row) {?>
<a href="<?php echo $url?>dashboard/insert/collections/<?php echo $row->surname?>/new">
<?php echo $row->full_name;?>
</a><br/>
<?php }?>
  </p>
</div>


<div class="large-6 columns">

<p align="center">
<h3>Add to an EXISTING Collection for</h3><br/>

<?php foreach ($designers->result() as $row) {?>
<a href="<?php echo $url?>dashboard/insert/collections/<?php echo $row->surname?>/old">
<?php echo $row->full_name;?>
</a><br/>
<?php }?>
  </p>
</div>
</div>
<?php

require_once('footer.php')

?>
