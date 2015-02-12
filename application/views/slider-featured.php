<div class="slider slider-for">
  <div><img src="<?php echo $url?><?php echo $featuredpic;?>?width=100&format=png&quality=50"></div>
   <?php
  $i = 0;
  foreach ($pics as $pic) {?>
    <div><img src="<?php echo $url?><?php echo $pic;?>?width=100&format=png&quality=50"></div>
  <?php $i++;}?>
</div>