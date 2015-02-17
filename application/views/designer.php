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
        <div id="main-content" class="ui stackable responsive grid">
          <div class="row">
          <?php
          //side menu
          include_once('side-menu.php');
          ?>
            <div id="main-content-cards" class="twelve wide column">
              <div class="ui responsive introduction grid">

                  <div class="six wide column">
                      <img class="ui large circular image" src="<?php echo $url.$designer->pic;?>">
                  </div>

                  <div class="eight wide column">
                    <div class="ui segment">
                      <h1><?php echo $designer->label;?></h1>
                      <?php if(isset($designer->bio)){ ?>
                        <h2><?php echo $designer->bio;?></h2>
                      <?php  }
                      ?>
                    </div>
                    <div class="ui segment">
                      <a href="<?php echo $url."catalogue/designer/".$designer->surname;?>"><h2>View Collections By this Designer</h2></a>
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