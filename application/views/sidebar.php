<!-- black side bar -->
<div class="ui left styled vertical menu sidebar" id="side-bar">
    <a class="ui logo icon image item" href="/">
      <img id="logo-item" src="<?php echo $url?>uiux/img/logo.png">
    </a>
  <div class="item">
  <br/>
  </div>

  <?php if($this->session->userdata('logged_in')==FALSE){?>
    <a href="<?php echo $url?>auth/signup/" class="item" id="login">Sign Up</a>
    <a href="<?php echo $url?>auth/" class="item" id="login">Login</a>
  <?php }else{?>
    <a href="<?php echo $url?>auth/" class="item"><?php echo $this->session->userdata('user');?></a>
    <a href="<?php echo $url?>auth/log_out/" class="item"> Logout</a>
  <?php }?>

  <a class="item" href="<?php echo $url;?>cart/">
   <b>Shopping Cart</b>
  </a>
  <a class="item" href="<?php echo $url;?>catalogue/all/">
    <b>All Collections</b>
  </a>
    <a class="item" href="<?php echo $url;?>catalogue/men/">
    <b>For Him</b>
  </a>
    <a class="item" href="<?php echo $url;?>catalogue/women/">
    <b>For Her</b>
  </a>
    <a class="item" href="<?php echo $url;?>catalogue/blog/">
    <b>Fashion Blog</b>
  </a>
    <a class="item" href="<?php echo $url;?>catalogue/designers/">
    <b>Meet Our Designers</b>
  </a>
</div>
<!-- end of black side bar -->
