<?php
require_once('header.php');
?>



<div class="row">
  <div class="large-12 columns">
<br/>
    <h1 align="center">My Shopping Cart</h1>
<br/>
        <?php echo form_open('cart/update'); ?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
  <th><h1>Quantity</h1></th>
  <th><h1>Product Description</h1></th>
  <th style="text-align:right"><h1>Item Price</h1></th>
  <th style="text-align:right"><h1>Sub-Total</h1></th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

  <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

  <tr>
  <td> <h7>increase or decrease quantity of order</h7>
    <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
    <td>

      <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>


        <p align="center">
          <?php echo $items['name']; ?><br/>
          <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

          <?php endforeach; ?>
        </p>

      <?php endif; ?>

    </td>
    <td style="text-align:right">$<?php echo $this->cart->format_number($items['price']); ?></td>
    <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
  </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<div class="row">
  <div class="large-6 medium-6 small-6 columns">
    <input type="submit" name="update" value="Update My Cart" class="button expand success"/>
  </div>
  <div class="large-6 medium-6 small-6 columns">
    <a href="<?php echo $url;?>cart/remove/" class="button expand alert">Remove All Items</a>
  </div>
</div>

<?php if($this->cart->total_items() != null):?>
<ul class="pricing-table"> <li class="title">Checkout with PayNow</li>
<li class="price">Total $<?php echo $this->cart->format_number($this->cart->total()); ?></li>
<li class="description">
<h5>Item(s)</h5>
<?php foreach ($this->cart->contents() as $items): ?>
  <h1><?php echo $items['name']; ?></h1><br/>
<?php endforeach; ?>
</li>
<li class="cta-button"><a class="button" href="<?php echo $url;?>cart/checkout/">PayNow</a></li> </ul>
</p>
<?php endif;?>

  </div>
</div>

<p align="center">
<h1 align="center"><a href="https://www.paynow.co.zw/Transaction/Comments/1437">SANS Exposure is a Verified Merchant & Secure to recieve online payments with PayNow. You can pay via Visa, Master Card, EcoCash & TeleCash. Click here to find out more.</a></h1>
</p>
<p align="center">
  <a href="https://www.paynow.co.zw/Transaction/Comments/1437"><img src="http://sans.co.zw/client_side/sans/images/verified_merchant.png"/></a>
</p>

<?php

require_once('footer.php')

?>
