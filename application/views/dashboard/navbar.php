<nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <a href="<?php echo $url;?>"><img src="http://sans.co.zw/client_side/sans/images/sans_black_logo.jpg"></a>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
        <li><a href="<?php echo $url."dashboard/" ?>"><?php echo "Hello :) ". $user;?></a></li>
        <li><a href="#"><?php echo "Role: ". $usertype; ?></a></li>
        </ul>
        <ul class="left">
        <li class="active"><a href="<?php echo $url?>auth/log_out/">Logout</a></li>
        </ul>
      </section>
    </nav>
