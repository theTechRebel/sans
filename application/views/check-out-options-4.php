<div class="ui sixteen wide column">
  <div class="ui steps">
    <div class="step">
      <i class="user icon"></i>
      <div class="content">
        <div class="title">Info</div>
        <div class="description">Your personal information.</div>
      </div>
    </div>
    <div class="step">
      <i class="truck icon"></i>
      <div class="content">
        <div class="title">Shipping</div>
        <div class="description">Choose your shipping options.</div>
      </div>
    </div>
    <div class="step">
      <i class="payment icon"></i>
      <div class="content">
        <div class="title">Billing</div>
        <div class="description">Choose payment options.</div>
      </div>
    </div>
    <div class="active step">
      <i class="info icon"></i>
      <div class="content">
        <div class="title">Order complete.</div>
      </div>
    </div>
  </div>
      
  <div class="steps" id="checkout-content">
    <div>
      <h3 class="ui header top attached">
        <i class="icon empty heart"></i>Thank you for shopping with us.
      </h3>


        <div class="shipping-options-stuff">
            <div id="shipping-option-selector-view">
                <div>
                  <div class="ui attached mid segment shipping-options ">
                    <div class="ui large form">
                    <?php $this->session->unset_userdata('stage'); ?>
                    <?php if($this->session->userdata('cod_msg')!= Null){?>
                    <h1><?php echo $this->session->userdata('cod_msg');  ?></h1>
                    <?php $this->cart->destroy(); ?>
                    <?php $this->session->unset_userdata('transaction');?>
                    <p align="center"><?php $this->session->unset_userdata('cod_msg'); ?></p>
                    <?php }?>
                      </div>
                </div>
                </div>

                <div class="text item">
    <h4 align="center">Love our streamlined purchase process? Stay updated with current fashion trends, blogs 
    and new stuff by subscribing to our Newsletter.</h4>
  </div>
    <div class="ui action input">
    <form action="<?php echo $url."catalogue/signmeup"?>" method="post">
      <input type="text" placeholder="example: me@email.com " name="newsletter">
      <input type="submit" class="ui primary button" value="Sign me up"/>
    </div>
    <br/><br/>

<a class="ui huge teal fluid button" href="<?php echo $url?>catalogue/all/">Continue Shopping</a>
        </div>
            </div></div>
            <div class="text item">
    <h4><a>Sign Up</a> for the SANS Exposure Newsletter and get updates on products 
      blogs, trends and news delivered straight to your inbox.</h4>
  </div>
  <div class="item">
    <div class="ui action input">
    <form action="<?php echo $url."catalogue/signmeup"?>" method="post">
      <input type="text" placeholder="example: me@email.com " name="newsletter">
      <input type="submit" class="ui primary button" value="Sign me up"/>
    </div>
        </div>
        <?php $fullWindow = TRUE ?>