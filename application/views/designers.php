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
              <h1>Our Designers.</h1>
                    <div class="ui two doubling cards">
                      <?php   $i = 0;
                                  foreach ($designers->result() as $row){ ?>
                        <div id="card" class="ui card" align="center">
                          <div class="image" href="#">
                            <span class="product">

                              <div class="image" align="center">
                                <a href="<?php echo $url?>catalogue/designers/<?php echo $row->surname;?>"><img alt="SANS Exposure Designer" height="300" src="<?php echo $url?><?php echo $row->pic;?>?width=100&format=png&quality=50"></a>
                              </div>

                              <span class="in-relation">
                                <span class="name-tagline">
                                  <span class="tagline">
                                    <a href="<?php echo $url?>catalogue/designers/<?php echo $row->surname;?>"><i class="ui  image label"><h1><?php echo $row->label?></h1></i></a></h1>
                                    <a href="<?php echo $url?>catalogue/designer/<?php echo $row->surname;?>"><i class="ui image label"><h3>View Collections by this Designer</h3></i></a>
                                  </span>
                                </span>
                              </span>



                              <span class="bar"></span>

                            </span>
                          </div>
                        </div>
                      <?php  $i++;}?>
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