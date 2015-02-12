      
<section main-section>

  <div class="row">


    <!-- Left section -->
    <div class="large-6 medium-6 small-12 columns" style="padding-top: 0px;margin-top: 0px;">

                <div class="slider slider-for" style="max-width:350px;">
          <div><img width="1" height="1" src="<?php echo $url?><?php echo $featuredpic;?>"></div>
           <?php
          $i = 0;
          foreach ($pics as $pic) {?>
            <div><img src="<?php echo $url?><?php echo $pic;?>"></div>
          <?php $i++;}?>
        </div>

    </div>

    <!-- right section -->
    <div class="large-6 medium-6 small-12 columns panel">

    <div class="row">
        <div class="slider slider-nav panel"  style="padding-top: 0px; margin-top: 0px;margin-left: 10px; margin-right: 10px;">
          <div><img src="<?php echo $url?><?php echo $featuredpic;?>"></div>

          <?php
          $i = 0;
          foreach ($pics as $pic) {?>
            <div><img src="<?php echo $url?><?php echo $pic;?>"></div>
          <?php $i++;}?>
          </div>
    </div>
    <?php echo form_open('cart/add'); ?>
        <!-- item name -->
        <fieldset>
        <div class="row">
          <div class="large-12 columns">
            <h5>Item: <?php echo $item_name;?></h5>
            <input type="hidden" name="name" value="<?php echo $item_name;?>"/>
          </div>
        </div>
        <!-- item price -->
        <div class="row">
          <div class="large-12 columns">
            <h5>Price: $<?php echo $price;?></h5>
            <input type="hidden" name="price" value="<?php echo $price;?>"/>
          </div>
        </div>
        <!-- item designer -->
        <div class="row">
          <div class="large-12 columns">
            <h5>Designer: <a href="<?php echo $url?>designers/view/<?php echo $designer;?>"><?php echo str_replace("_", " ", $designer);?></a></h5>
          </div>
        </div>
      <!-- item Category -->
      <div class="row">
          <div class="large-12 columns">
          <h5>Category:
          <?php  switch ($sex) {
              case 1:
                echo "Mens Clothing";
              break;
              case 2:
                echo "Unisex";
              break;
              case 0:
                echo "Womens Clothing";
              break;
            }?></h5>
          </div>
      </div>
    </fieldset>
      <!-- specifications -->
      <fieldset>
        <h4><u>Order Specifications.</u></h4>
      <div class="row">
        <div class="large-4 medium-4 small-4 columns" align="center">
          <h5>Quantity</h5>
        </div>
        <div class="large-4 medium-4 small-4 columns" style="margin-left: 0px;padding-left: 0px;" align="center">
        <h5>Color</h5>
        </div>
        <div class="large-4 medium-4 small-4 columns" style="margin-left: 0px;padding-left: 0px;" align="center">
        <h5>Size</h5>
        </div>
      </div>
      <!--specifications -->
      <div class="row">
        <div class="large-4 medium-4 small-4 columns">
          <input type="text" name="quantity" placeholder="please specify quantity" value="1"/>
        </div>
        <div class="large-4 medium-4 small-4 columns">
          <select name="color">
              <option value="brown">Black</option>
              <option value="blue">Blue</option>
              <option value="red">Red</option>
              <option value="green">Green</option>
              <option value="white">White</option>
              <option value="yellow">Yellow</option>
              <option value="pink">Pink</option>
              <option value="purple">Purple</option>
              <option value="purple">Orange</option>
              </select>
        </div>
        <div class="large-4 medium-4 small-4 columns">
        <select name="size">
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="extra large">Extra Large</option>
              </select>
        </div>
      </div>
    </fieldset><br/><br/>
      <!-- Add to cart button -->
      <div class="row">
      <div class="large-12 columns center" align="center">
      <input type="hidden" value="<?php echo $code?>" name="code"/>
      <input type="submit" name="cart" class="button success expand radius" value="Add to Cart">
    </form>
        </div>
      </div>
      <!--
      <fieldset>
        <!-- social integration -->
<!--
        <div class="row">
          <div class="large-12 medium-12 small-12 columns">
            <h5><a href="#">Share on Facebook</a></h5>
          </div>
        </div>
        <div class="row">
          <div class="large-12 medium-12 small-12 columns">
            <h5><a href="#">Share on Twitter</a></h5>
          </div>
        </div>
        <hr/>
      <div class="row">
      <!-- Comment
        <div class="large-12 medium-12 small-12 columns">
          <h4>Comments</h4><br/>
          <input type="text" name="comment" placeholder="please leave a comment...">
        </div>
      </div>
     </fieldset>
      -->

    </div>



  </div>

  <hr/>
</section>
