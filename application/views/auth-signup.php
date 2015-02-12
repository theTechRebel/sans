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

            <?php
              //page - content here
              require_once('auth-signup-form.php');
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