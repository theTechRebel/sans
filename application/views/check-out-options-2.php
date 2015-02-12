<div class="ui sixteen wide column">
  <div class="ui steps">
    <div class="step">
      <i class="user icon"></i>
      <div class="content">
        <div class="title">Info</div>
        <div class="description">Your personal information.</div>
      </div>
    </div>
    <div class="active step">
      <i class="truck icon"></i>
      <div class="content">
        <div class="title">Shipping</div>
        <div class="description">Choose your shipping options.</div>
      </div>
    </div>
    <div class="disabled step">
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
      
  <div class="steps" id="checkout-content">
    <div>
      <h3 class="ui header top attached">
        <i class="icon rocket"></i>Choose how we are going to get this item to you.
      </h3>

      <form class="ui form" action="<?php echo $url?>cart/checkout/" method="POST">
        <div class="shipping-options-stuff">
            <div id="shipping-option-selector-view">
                <div>
                  <div class="ui attached mid segment shipping-options ">
                    <div class="ui large form">
                      <div class="two fields">
                      <input type="hidden" name="stage" value="2">
                          <div class="field">
                            <div class="ui radio checkbox">
                              <input name="method" type="radio" value="delivery" checked="checked">
                                 <label>Delivery</label>
                            </div>
                            <br/>I want you to deliver it to my shipping address:<br/>
                            <?php echo $address;?>
                          </div>
                        
                          <div class="field">
                            <div class="ui radio checkbox">
                              <input name="method" type="radio" value="collection">
                              <label>Collection</label>
                            </div>
                             <br/>I want to come and collect it myself at your offices: <br/>
                             Our offices are at 6th Floor Batanai Gardens, Corner First Street and Jason Moyo Avenue, Harare, Zimbabwe.
                          </div>
                      </div>
                    </div>
                </div>
                </div>
            </div>

          <div class="ui attached bottom right aligned segment">
            <input type="submit" class="ui fluid primary huge button" value="Continue to payment">
          </div>
        </div>
      </form>


            <p>All items ship within 5 working days unless otherwise noted.</p>
            </div></div>
        </div>