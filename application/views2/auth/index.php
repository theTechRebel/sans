<!doctype html>
<?php
   $url = $this->config->item('base_url');
?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="sans exposure is Zimbabwes first online fashion catalogue offering a wide range of locally designed apparell">
    <!-- TITLE -->
    <title>sans exposure</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo $url?>client_side/sans/foundation/foundation.css" />
    <link rel="stylesheet" href="<?php echo $url?>client_side/sans/foundation/normalize.css" />
    <link rel="stylesheet" href="<?php echo $url?>client_side/sans/foundation/app.css" />

       <!-- SLICK SLIDEER STYLESHEETs -->
    <link rel="stylesheet" href="<?php echo $url?>client_side/sans/slick/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo $url?>client_side/sans/slick/css/style.css" />

    <!-- JAVASCIPT   -->
    <script src="<?php echo $url?>client_side/sans/bower_components/modernizr/modernizr.js"></script>

  </head>
  <body>
  <!--
              //search bar above the nav bar
              <div class="top-search">
                <form action="" method="POST">
                    <div class="row collapse">
                        <div class="small-8 columns">
                            <input type="text" name="query" value="<?php if(isset($_POST['search'])){echo $_POST['query'];}?>" placeholder="type in a search here...">
                        </div>
                        <div class="small-4 columns">
                        <input type="submit" class="success button tiny" value="Search" name="search"/>
                        </div>
                    </div>
                </form>
              </div>
  -->

<?php
require_once('nav-top.php');
require('login_index.php');
require_once('footer.php');
?>



