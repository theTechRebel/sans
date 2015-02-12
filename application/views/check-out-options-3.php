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
        <div class="title">Order complpete.</div>
      </div>
    </div>
  </div>
      
  <div class="steps" id="checkout-content">
    <div>
      <h3 class="ui header top attached">
        <i class="icon dollar"></i>Order Summary & Payment options.
      </h3>


        <div class="shipping-options-stuff">
            <div id="shipping-option-selector-view">
                <div>
                  <div class="ui attached mid segment shipping-options ">
                    <div class="ui large form">
                      <div class="ui tertiary tertiary segment">
                      <h3>Total $<?php echo $this->cart->format_number($this->cart->total()); ?></h3>
                      <h3>Item(s):</h3>
                      <?php foreach ($this->cart->contents() as $items): ?>
                        <h3><?php echo $items['name']; ?></h3><br/>
                      <?php endforeach; ?>
                      </div>

                    <h3 class="ui header top attached">
                            <i class="icon checkmark box"></i>Available options.
                          </h3>
                      <div class="ui two doubling cards">
                        <div class="ui card">
                          <div class="ui slide masked reveal image">
                            <img src="<?php echo $url?>uiux/img/paynow.png" class="visible content">
                            <img src="<?php echo $url?>uiux/img/verified_merchant.png" class="hidden content">
                          </div>
                          <div class="content">
                            <a href="https://www.paynow.co.zw/Transaction/Comments/1437" class="header"><h1>PayNow</h1></a>
                            <form action="<?php echo $url;?>cart/checkout/" method="post">
                            <input type="hidden" name="stage" value="3">
                            <input type="hidden" name="payment_method" value="paynow">
                            <input type="submit" name="pay" class="ui fluid primary button" value="Click HERE to pay with PayNow">
                            </form>
                            <div class="description">
                              <br/> PayNow is Zimbabwes leading online payments gateway. Choosing PayNow enables you to pay SANS
                              Exposure with anything from <b>EcoCash</b>, <b>TeleCash</b>, <b>Visa</b>, <b>Master Card</b> & <b>V-Payments.</b> Just click the button above
                              and you will be sent to the PayNow website to complete you transaction.
                            </div>
                          </div>
                        </div>

                        <div class="ui card">
                          <div class="ui slide masked reveal image">
                            <img src="<?php echo $url?>uiux/img/cash-on-delivery.png" class="visible content">
                            <img src="<?php echo $url?>uiux/img/cash-on-delivery2.png" class="hidden content">
                          </div>
                          <div class="content">
                            <a class="header"><h1>Cash On Delivery</h1></a>
                            <form action="<?php echo $url;?>cart/checkout/" method="post">
                            <input type="hidden" name="stage" value="3">
                            <input type="hidden" name="payment_method" value="cod">
                             <input type="submit" name="pay" class="ui fluid primary button" value="Click HERE for Payment on Delivery">
                            </form>
                          </div>
                        </div>

                    </div>
                    
                    <h3 class="ui header top attached">
                            <i class="icon smile"></i>Payment options coming soon. (unavailable currently)
                          </h3>
                <div class="ui loading segment">
                    <div class="ui three cards">
                        <div class="ui disabled card">
                          <div class="image">
                            <img src="<?php echo $url?>uiux/img/pay4app.png">
                          </div>
                          <div class="content">
                          <a class="header"><h1>Pay4App</h1></a>
                            <div class="description">
                                Pay4App allows you to remit payments online using <b>EcoCash</b>, <b>TeleCash</b>, <b>Visa</b> and <b>ZimSwitch</b>. Just click here
                              and you will be sent to the PayNow website to complete you transaction.
                            </div>
                          </div>
                        </div>

                        <div class="ui disabled card">
                          <div class="image">
                            <img src="<?php echo $url?>uiux/img/paypal.png">
                          </div>
                          <div class="content">
                            <a class="header"><h1>PayPal</h1></a>
                            <div class="description">
                                If you have a <b>PayPal</b> account you can choose to complete you payment using <b>PayPal</b>. Just click here
                              and you will be sent to the PayNow website to complete you transaction.
                            </div>
                          </div>
                        </div>

                        <div class="ui disabled card">
                          <div class="image">
                            <img src="<?php echo $url?>uiux/img/stripe.png">
                          </div>
                          <div class="content">
                            <a class="header"><h1>Stripe</h1></a>
                            <div class="description">
                                If you have a <b>Stripe</b> account you can choose to complete you payment using <b>Stripe</b>. Just click here
                              and you will be sent to the PayNow website to complete you transaction.
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
            </div></div>
        </div>