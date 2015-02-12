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
              if($this->session->userdata('logged_in') ==FALSE){
                require_once('check-out-options-1.php');
              }elseif($this->session->userdata('logged_in') ==TRUE){

                //die(var_dump($this->session->userdata('stage')));
                switch ($this->session->userdata('stage')) {

                  case 2:
                    require_once('check-out-options-2.php');
                    break;
                  case 3:
                    require_once('check-out-options-3.php');
                    break;
                  case 4:
                    require_once('check-out-options-4.php');
                  break;
                }
              }
              
              //
              //require_once('check-out-options-3.php');
              //require_once('check-out-options-4.php');
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
