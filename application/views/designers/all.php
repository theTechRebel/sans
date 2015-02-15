<?php
require('header.php');
require('nav-top.php');
?>

<div class="row">
<div class="large-12 columns"><br/><br/>
<h3>Meet the designers</h3>
<h4 align="center">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h4>
</div>

<div class="large-12 columns">
<br/><br/><br/>
<?php if(isset($data)){

   foreach ($data->result() as $row) {?>

<div class="row panel">

<div class="large-6 medium-6 small-6 columns">
  <img src="<?php echo $url.$row->pic;?>" width="250"/>
</div>
<div class="large-6 medium-6 small-6 columns">
<h1>
  Name:<br/>
  <?php echo $row->full_name;?><br/><br/>
  Label:<br/>
  <?php echo $row->label;?><br/><br/>
  Brief Bio:<br/>
   <?php echo $row->bio;?><br/><br/><br/>

   <h2 align="center"><a href="<?php echo $url?>catalogue/show/<?php echo $row->surname;?>">View Collections from this designer</a></h2>
 </h1>
</div>
</div>

<?php }}?>
</div>
</div>

<section main-section>
    <div class="row full-width">
    </div>
</section>






<?php
require_once('footer.php');
?>
