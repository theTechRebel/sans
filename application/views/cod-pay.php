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
                      <div class="active step">
                        <i class="payment icon"></i>
                        <div class="content">
                          <div class="title">Billing</div>
                          <div class="description">Choose payment options.</div>
                        </div>
                      </div>
                      <div class="disabled step">
                        <i class="info icon"></i>
                        <div class="content">
                          <div class="title">Order complete.</div>
                        </div>
                      </div>
                    </div>
                  <div class="ui thin segment">
                    <div class="item" align="center"><h3><u>Order Invoice</u></h3></div>
                    <div class="ui tertiary tertiary segment">
                      <h3>Total $<?php echo $this->cart->format_number($this->cart->total()); ?></h3>
                      <h3>Item(s):</h3>
                      <?php foreach ($this->cart->contents() as $items): ?>
                        <h3><?php echo $items['name']; ?></h3><br/>
                      <?php endforeach; ?>
                      </div>

                      <div class="ui tertiary segment">
                        <h2>Customer Details</h2>
                        <h3>Name: <?php echo $fname ." ".$sname?><br/></h3>
                        <h3>Phone Number: <?php echo $phone?><br/></h3>
                        <h3>Email: <?php echo $email?><br/></h3>
                      </div>

                      <div class="ui tertiary segment">
                      <form class="ui form" method="post" action="<?php echo $url?>cod/method/">
                        <input type="hidden" name="ammount" value="<?php echo $this->cart->format_number($this->cart->total()); ?>">
                        <input type="hidden" name="items" value="<?php foreach ($this->cart->contents() as $items): ?>
                        <?php echo $items['name']."<br/>"; ?><?php endforeach; ?>">
                        <input type="hidden" name="name" value="<?php echo $fname ." ".$sname?>">
                        <input type="hidden" name="phone" value="<?php echo $phone?>">
                        <input type="hidden" name="email" value="<?php echo $email?>">
                        <h2>How do you want us to contact you to settle the transaction?</h2>
                       <div class="two fields">
                          <div class="field">
                            <div class="ui radio checkbox">
                              <input name="method" type="radio" value="whats app" checked="checked">
                              <label>Whats App</label>
                            </div>
                            <br/>SANS Exposure customer service representatives will contact you via our Whats App account
                            and settle the transaction and process payments directly with you. Our Whats App
                            number are +263 773 447 311, select this option then click the button below and check your phone in the next 2 minuets.<br/>
                          </div>
                        
                          <div class="field">
                            <div class="ui radio checkbox">
                              <input name="method" type="radio" value="email">
                              <label>Email</label>
                            </div>
                             <br/>SANS Exposure customer service representatives will contact you via email
                             and settle the transaction and process payments directly with you. Our email is
                             sales@sans.co.zw, select this option then click the button below and check your inbox in the next 2 minuets.<br/>
                             </div>
                      </div>

                        <input type="submit" class="ui huge primary button" name="submit" value="Contact me using the above specified method to complete transaction.">
                      </form>
                      </div>
                  </div>

                </div>
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