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

    <!-- JAVASCIPT   -->
    <script src="<?php echo $url?>client_side/sans/bower_components/modernizr/modernizr.js"></script>

  </head>
  <body>

<section class="navigation-section">
    <div class="sticky">
        <nav class="top-bar" data-topbar role="navigation">

          <ul class="title-area">
            <li class="name">
            </li> <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->

            <li class="toggle-topbar menu-icon">
              <a href="#"><span>Menu</span></a>
            </li>
          </ul>

          <section class="top-bar-section"> <!-- Right Nav Section -->
            <ul class="left">
                <li class="nav-list">
                  <a href="<?php echo $url?>cart">Shopping Cart :
                  <?php if($this->cart->total_items() != null){
                    echo $this->cart->total_items();
                  }else{
                    echo 0;
                  }
                  ?></a>
                </li>
                <li>
                  <a href="<?php echo $url;?>about">About</a>
                </li>

                <li>
                  <a href="<?php echo $url;?>about/#contact">Contact</a>
                </li>

                <li>
                  <a href="#">Disclaimer</a>
                </li>



            </ul> <!-- Left Nav Section -->

            <ul class="left">
            <?php if($this->session->userdata('logged_in')==FALSE){?>
              <li class="active"><a href="<?php echo $url;?>auth">Sign Up | Login</a></li>
            <?php }else{?>
              <li class="active"><a href="<?php echo $url;?>auth/log_out">Logout</a></li>
              <li class="active"><a href="<?php echo $url;?>customers">My Account</a></li>
            <?php }?>
            </ul>
          </section>
        </nav>
    </div>
</section> <!-- END SECTION.NAVIGATION-SECTION -->

<div class="small-12 large-12 medium-12 columns primary sticky masthead" align="center" >
<?php if($this->session->userdata('logged_in')==FALSE){?>
              <a href="<?php echo $url;?>auth">Sign Up | Login</a>
            <?php }else{?>
              <a href="<?php echo $url;?>auth/log_out">Logout</a> |
              <a href="<?php echo $url;?>customers">My Account</a>
            <?php }?> &nbsp;
  <a href="<?php echo $url;?>"><img src="<?php echo $url?>/client_side/sans/images/sans.png"/></a> |

<a href="<?php echo $url?>cart"> &nbsp; Cart Items
                  [<?php if($this->cart->total_items() != null){
                    echo $this->cart->total_items();
                  }else{
                    echo 0;
                  }
                  ?>]
= $<?php echo $this->cart->format_number($this->cart->total()); ?>
                  </a><br/>
  <a href="<?php echo $url;?>">Home</a> &nbsp; &nbsp;&nbsp; &nbsp;
  <a href="<?php echo $url;?>catalogue/all">All collections</a> &nbsp; &nbsp;&nbsp; &nbsp;
  <a href="<?php echo $url;?>catalogue/women">Womens clothing</a> &nbsp; &nbsp;&nbsp; &nbsp;
  <a href="<?php echo $url;?>catalogue/men">Mens clothing</a> &nbsp; &nbsp;&nbsp; &nbsp;
  <a href="<?php echo $url;?>catalogue/designers">Meet the designers</a> &nbsp; &nbsp;&nbsp; &nbsp;
  <br/><br/>
  <h4> <?php echo $this->pagination->create_links(); ?> </h4>
<hr style="border-bottom: 0px; margin-bottom: 0px; margin-top: 0px; padding-top: 0px;" />
</div>











