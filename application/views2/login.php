<?php require_once('header.php') ?>

    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <?php echo form_open('login') ?>
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>

                    <p><a href="#">I forgot my password</a></p>

                    <a href="<?php echo $url?>signup" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="ion-social-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="ion-social-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="ion-icon-social-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
