<?php
//header
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
        <div id="main-content" class="ui stackable responsive grid">
          <div class="row">
      <?php
          //side menu
          include_once('side-menu.php');
          ?>
            <div id="main-content-cards"class="twelve wide column">
              <div class="ui stackable responsive grid">
              <div class="row">
                <div class="one wide column"><pre></pre></div>
                <div class="seven wide column">
                  <div class="row">
                  <?php
                  //featured image section
                  include_once('slider-featured.php');
                  ?>    
                  </div>
                </div>

                <div class="eight wide column">
                
                <?php
                //price and description
                include_once('price-description.php');
                ?>

                <?php
                include_once('slider-images.php');
                ?>
                
                <?php
                include_once('item-customisation.php');
                ?>

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
        
      </div>
      </div>
</body>
</html>
