<div id="pc-menu" class="following bar light fixed">
      <div class="ui page grid">
        <div id="top-column" class="column">
          <div id="logo" class="ui logo">
            <a href="<?php echo $url;?>"><img class="ui image" src="<?php echo $url?>uiux/img/logo.png"></a>
          </div>
<!-- right floated content -->
          <div id="fixed-menu" class="ui right floated secondary menu inverted">
            <a href="<?php echo $url?>cart/" class="view-ui item" id="shopping-cart">Shopping Cart: (
              <?php if($this->cart->total_items() != null){
                    echo $this->cart->total_items();
                  }else{
                    echo 0;
                  } ?> )
              </a>
              <?php if($this->session->userdata('logged_in')==FALSE){?>
              <a href="<?php echo $url?>auth/signup/" class="view-ui item" id="login">Sign Up</a>
              <a href="<?php echo $url?>auth/" class="view-ui item" id="login">Login</a>
            <?php }else{?>
              <a href="<?php echo $url?>auth/" class="item"><?php echo $this->session->userdata('user');?></a>
              <a href="<?php echo $url?>auth/log_out/" class="item"> Logout</a>
            <?php }?>
            
          </div>
          <div class="ui right floated secondary menu inverted">
          <a id="sans-exposure" class="view-ui item" href="<?php echo $url;?>">SANS Exposure</a>
          </div>

<!-- left floated content -->
          <div class="ui large secondary network menu inverted">
            <a class="view-ui item" id="menu-open">
              <i id="" class="sidebar icon"></i> Menu
            </a>
            <a href="<?php echo $url;?>catalogue/all/" class="view-ui item" id="category-item">All Collections</a>
            <a href="<?php echo $url;?>catalogue/men/" class="view-ui item" id="category-item">For Him</a>
            <a href="<?php echo $url;?>catalogue/women/" class="view-ui item" id="category-item">For Her</a>

            <a class="ui dropdown item" id="category-dropdown">
              <i class="dropdown icon"></i>Catalogues
              <div class="menu">
                <div id="drop-down-item" class="item">All Collections</div>
                <div id="drop-down-item" class="item">For Him</div>
                <div id="drop-down-item" class="item">For Her</div>
              </div>
            </a>

          </div>
        </div>
      </div>
    </div>