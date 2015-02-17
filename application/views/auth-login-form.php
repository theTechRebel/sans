<div class="ui sixteen wide column">
      
              <div class="steps" id="checkout-content">
                <div>
                  <h3 class="ui header top attached">
                    <i class="icon user"></i> Login to your personal SANS Exposure Account.
                  </h3>

                  <div class="errors"><?php if(isset($no_user)){echo $no_user;}?></font>

<div class="ui mid attached segment address-form-view" style="display: block;"><div>
<form method="POST" action="<?php echo $url?>auth/">
  <div class="ui large form address-form">

    <div class="two fields">
      <div class="field ">
        <label>Email Address</label>
        <div class="errors"><?php echo form_error('email')?></div>
        <input class="wide" name="email" value="<?php echo set_value('email')?>" onchange="" placeholder="onlineshopper@email.com" size="30" type="text" value="">
      </div>
      <div class="field ">
        <label>Password</label>
        <div class="errors"><?php echo form_error('password')?></div>
        <input type="password" class="wide" name="password" onchange="" size="30" type="text" value="">
      </div>
    </div>

    <input type="submit" class="ui fluid huge primary button" value="Log in" name="submit">

  </div>
</form>
</div></div>




<a href="<?php echo $url;?>auth/signup/"><h3>If you dont have an account you can signup here.</h3></a>

<a href="<?php echo $url;?>auth/recover/"><h3>If you forgot your password you can recover it here.</h3></a>


<?php 
  if($this->session->userdata('userfound') != Null){
                  echo "<h3> Hi there ". $this->session->userdata('userfound') ."<br/>";
                   $this->session->unset_userdata('userfound');?>
                   <a href="<?php echo $url?>auth/recover/">We noticed that you are trying to create another account when you already have one!
                   If you forgot your password its not a problem you can recover it easily by clicking
                   right here.</a></h3>
<?php 
}
?>
            </div></div>
                </div>