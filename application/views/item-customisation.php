 <div class="ui slim segment">
  <div class="ui grid">
    <div class="row">
      <div class="sixteen wide column">
          <div class="ui form">
            <h3 class="dividing header" align="center"><u>Order Specification.</u></h3>
            <?php
              if($sex == 1 && stristr($collection, 't-shirt') != FALSE){  
                  include_once('table-mens-tshirt.php');
              }elseif($sex == 1 && stristr($collection, 'shirt') != FALSE){
                  include_once('table-mens-shirt.php');
              }elseif($sex == 1 && stristr($collection, 'hat') != FALSE){
                  include_once('table-mens-hat.php');
              }elseif($sex == 1 && stristr($collection, 'sweater') != FALSE){
                  include_once('table-mens-suit_coat_sweater.php.php');
              }elseif($sex == 1 && stristr($collection, 'coat') != FALSE){
                  include_once('table-mens-suit_coat_sweater.php.php');
              }elseif($sex == 1 && stristr($collection, 'pants') != FALSE){
                  include_once('table-mens-pants_shorts.php');
              }elseif($sex == 1 && stristr($collection, 'short') != FALSE){
                  include_once('table-mens-pants_shorts.php');
              }elseif($sex == 1 && stristr($collection, 'socks') != FALSE){
                  include_once('table-mens-socks.php');
              }elseif($sex == 1 && stristr($collection, 'underwear') != FALSE){
                  include_once('table-mens-underwear.php');
              }elseif($sex == 1 && stristr($collection, 'jacket') != FALSE){
                  include_once('table-mens-suit_coat_sweater.php');
              }elseif($sex == 1 && stristr($collection, 'suit') != FALSE){
                  include_once('table-mens-suit_coat_sweater.php.php');
              }elseif ($sex == 0  && stristr($collection, 'jewelery') === FALSE) {
                include_once('table-women.php');
              }
            ?>
          </div>
      </div>
    </div>
    </div>

    <form class="ui form" action="<?php echo $url?>cart/add/" method="post">
    <input id="size" type="hidden" name="size" value="">
    <input id="code" type="hidden" name="code" value="<?php echo $code;?>">
    <input id="name" type="hidden" name="name" value="<?php echo $item_name;?>">
    <input id="name" type="hidden" name="price" value="<?php echo $price;?>">
    <input id="location" type="hidden" name="location" value="<?php echo $featuredpic;?>">
        <div class="field">
          <h3 align="center">Select the quantity you want to buy.</h3>
          <select name="qty" class="ui search dropdown">
            <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="7">7</option>
              <option value="8">9</option>
              <option value="10">10</option>
          </select>
        </div>

      <div class="field">
        <h3 align="center">Do you want to specify anything else with your order?. type it in bellow.</h3>
        <textarea name="aob"></textarea>
      </div>

      <button name="add" class="ui primary fluid submit button">Add to Cart</button>
    </form>
</div>