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
      <!-- start top page -->
        <div id="top-page">
        <?php
        //top slider
        include_once('search.php');
        ?>
        <!-- <div class="ui divider"></div> -->
        </div>

      <!--end page body -->
      <!-- start page body -->
        <div id="main-content" class="ui stackable responsive grid">
          <div class="row">
          <?php
          //side menu
          include_once('side-menu.php');
          ?>
            <div id="main-content-cards" class="twelve wide column">
              <div class="ui responsive introduction grid">

                <div class="row">
                <div class="ui grid">
                    <div class="twelve wide column">
  <div class="ui slim segment">
    <h1>Account Details</h1>
        <div class="panel callout">
        <h3><?php echo $fname;?> <?php echo $sname;?></h3>
        <h3>Phone:<?php echo $phone;?> | Email:<?php echo $email;?></h3><hr/>
        <!-- <h4><a href="#">Contact Support</a></h4> <h4><a href="#">Contact Sales</a></h4> <h4><a href="#">Update Details</a></h4> -->
        </div>

        <div class="panel">
        Messages<br/>
          <table class="ui stripped table">
            <thead>
            <tr>
              <th>Date</th>
              <th>From</th>
              <th>Messages</th>
              <th>Read</th>
            </tr>
            </thead>

            <tbody>
              <!-- colunms here-->
            </tbody>
          </table>
        Orders<br/>
          <table class="ui stripped table">
            <thead>
            <tr>
              <th>Date</th>
              <th>From</th>
              <th>Messages</th>
              <th>Read</th>
            </tr>
            </thead>

            <tbody>
              <!-- colunms here-->
            </tbody>
          </table>

        Payments<br/>
          <table class="ui stripped table">
            <thead>
            <tr>
              <th>Date</th>
              <th>From</th>
              <th>Messages</th>
              <th>Read</th>
            </tr>
            </thead>

            <tbody>
              <!-- colunms here-->
            </tbody>
          </table>
        </div>

  </div>

  <?php if($this->cart->total_items() != null){?>

          <h1> Shopping Cart</h1>
            <div class="row">
              <?php echo form_open('cart/update'); ?>
                <table class="ui celled striped table">
                <thead>
                  <tr>
                    <th class="center aligned">Product</th>
                    <th class="center aligned">Description</th>
                    <th class="center aligned">Quantity</th>
                    <th class="center aligned">Price</th>
                    <th class="center aligned">Sub-Total</th>
                    <th class="center aligned"></th>
                  </tr>
                </thead>

                <?php $i = 1; ?>
                <?php foreach ($this->cart->contents() as $items): ?>
                <?php echo form_hidden($i.'[rowid]', $items['rowid']);?>
                <tbody>
                <tr>
                  <td>
                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                          <?php if($option_name == "location"):?>
                            <div class="image" align="center">
                              <a href="<?php echo $url?>catalogue/view/"><img alt="SANS Exposure Catalogue Item" height="180" src="<?php echo $url?><?php echo $option_value;?>?width=20&format=png&quality=50"></a>
                            </div>
                          <?php endif; ?>
                        <?php endforeach; ?>
                  </td>
                  <td>
                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                      <p align="center">
                      <h3><?php echo $items['name']; ?></h3><br/>
                      <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                          <?php if($option_name == "specifications" && $option_value != ""):?>
                            Your specification: <br/>
                            <?php echo $option_value?> <br/><br/>
                          <?php endif;?>
                          <?php if(is_array($option_value)):?>
                            <?php foreach (($option_value) as $key => $value):?>
                              <?php echo $value;?><br/>
                            <?php endforeach;?>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </p>
                    <?php endif; ?>
                  </td>
                  <td class="right aligned">
                    <select name="<?php echo $i.'[qty]' ?>" class="ui search dropdown">
                          <?php for($ii = 1; $ii<11; $ii++):?>
                            <?php if($ii == $items['qty']):?>
                              <option value="<?php echo $ii?>" selected><?php echo $ii;?></option>
                            <?php else:?>
                              <option value="<?php echo $ii?>"><?php echo $ii;?></option>
                            <?php endif;?>
                          <?php endfor;?>
                        </select>
                        <b>X</b>
                        <br/><br/>
                        <input type="submit" class="ui primary fluid button" name="update" value="update quantity">
                  </td>
                  <td class="right aligned collapsing"><h3>$<?php echo $this->cart->format_number($items['price']); ?></h3></td>
                  <td class="right aligned collapsing"><h3>$<?php echo $this->cart->format_number($items['subtotal']); ?></h3></td>
                  <td class="right aligned collapsing"> <a class="ui red button" href="<?php echo $url."cart/remove_item/".$items['rowid']?>">Remove from <br/> shopping cart</a><br/>
                    
                  </td>
                </tr>
                </tbody>

                <?php $i++; ?>

                <?php endforeach; ?>

                <tr>
                  <td colspan="2"> </td>
                  <td class="center aligned"><h2>Total</h2></td>
                  <td class="center aligned"><strong></strong></td>
                  <td class="right aligned"><h2>$<?php echo $this->cart->format_number($this->cart->total()); ?></h2></td>
                </tr>

              </table>
            </div>
              <a class="ui huge teal button" href="<?php echo $url?>cart/checkout/2">Proceed to Payment</a>
              <?php }?>
              <a class="ui huge teal button" href="<?php echo $url?>catalogue/all/">Continue Shopping</a>
</div>
                </div>
              </div>
            </div>
          </div>

          
              
        </div>
      </div>
    </div>
  </div>

  <?php
        //footer
        include_once('footer.php');
        ?>
