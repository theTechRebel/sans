<?php
  //site header
    include_once('header.php');
  ?>
<body id="site" class="index pushable" ontouchstart>
  <?php
  //left nav bar
  require_once('sidebar.php');
  ?>
  <div class="pusher">
    <div class="full height">
    <?php
    //fixed top menu
    require_once('fixed-menu.php');
    ?>
    <!-- main page content -->
      <div id="content" class="content">
      <!-- start page body -->
        <div id="main-content" class="ui centered responsive grid">
            <div id="main-content-cards" class="ten wide column">
            <div class="row">

            <div class="ui sixteen wide column">
      
              <div class="steps" id="checkout-content">
                <div>
                  <h3 class="ui header top attached">
                    <i class="icon user"></i> Recover your personal SANS Exposure Account.
                  </h3>

                  <div class="errors"><?php if(isset($no_user)){echo $no_user;}?></font>

<div class="ui mid attached segment address-form-view" style="display: block;"><div>
<form method="POST" action="<?php echo $url?>auth/recover/">
  <div class="ui large form address-form">

    <div class="one field">
      <div class="field ">
        <label>Enter your Email Address below to recover your password.</label>
        <div class="errors"><?php echo form_error('email')?></div>
        <input class="wide" name="email" value="<?php if($this->session->userdata('userfound_email') != null){echo $this->session->userdata('userfound_email');}?>" onchange="" placeholder="onlineshopper@email.com" size="30" type="text" value="">
      </div>
    </div>

    <input type="submit" class="ui fluid huge primary button" value="Recover My Password" name="submit">

  </div>
</form>
</div></div>




<a href="<?php echo $url;?>auth/signup/"><h3>If you dont have an account you can signup here.</h3></a>

<a href="<?php echo $url;?>auth/"><h3>If you remembered your password you can log in here.</h3></a>



<?php 
  if($this->session->userdata('email_sent') != Null){
                   $this->session->unset_userdata('email_sent');?>
                   Please check your email at <?php echo $this->session->userdata('userfound_email'); ?> for an email with steps on how you can recover your password. After that we are sure you can log back into your account.</h3>
                   <?php $this->session->unset_userdata('userfound_email');?>
<?php 
}
?>
            </div></div>
                </div>
              
              </div>
            </div>
            </div>
          </div>
        </div>
        <?php $fullWindow = TRUE ?>
        <?php
        //footer
        include_once('footer.php');
        ?>