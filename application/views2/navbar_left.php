


            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo $url?>client_side/img/superman.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                        <?php if($this->session->userdata('logged_in')==FALSE) { ?>
                        <a href="<?php echo $url?>login"><p>Hello, Guest Login</p></a>
                        <?php }else{ ?>
                            <a href="dashboard/">
                            <p>Hi, <?php echo $this->session->userdata('user');; ?>
                            </p>
                        <?php }?>


                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>

                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="ion-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>category/women/">
                                <i class="ion-female"></i> <span>Womens clothing </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>category/men">
                                <i class="ion-male"></i> <span>Mens clothing </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url?>designers">
                                <i class="ion-ios7-camera"></i> <span>Meet the Designers</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url?>about">
                                <i class="ion-information-circled"></i> <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url?>contact">
                                <i class="ion-ios7-email"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url?>disclaimer">
                                <i class="ion-document-text"></i> <span>Disclaimer </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url?>login">
                                <i class="ion-android-social-user"></i> <span>Login Or Signup </span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
