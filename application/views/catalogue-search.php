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
        //search bar
        require_once('top-slider.php');
        ?>
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
                <?php
                //designers labels
                //include_once('designer.php');
                ?>
                </div>
                <div class="row">
                <?php
                //most popular items slider
                //include_once('most-popular.php');
                ?>
                <?php
                //ads
                //include_once('ads.php');
                ?>

                <h2 class="shop-collection">

                <?php 
                if(null !== $this->session->userdata('newsletter')){
                  echo $this->session->userdata('newsletter');
                   $this->session->unset_userdata('newsletter');
                }

                if(isset($item)){
                      echo " You searched for ".str_replace('_',' ', $item);
                  }?></h4>
                <?php
                //card layout
                include_once('cards-search.php');
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <?php
        //footer
        include_once('footer.php');
        ?>
