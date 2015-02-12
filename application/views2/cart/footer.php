<hr/>
<div class="row footer full-width">
    <div class="large-3 medium-6 small-12 columns">
    <a href="<?php echo $url;?>"><img src="<?php echo $url?>/client_side/sans/images/sans.png"/></a> <h2>SANS Exposure</h2>
    <br/><u>Physical Address:</u><p>6th Floor Batanai Gardens, Corner First Street and Jason Moyo Avenue, Harare, Zimbabwe</p>
    <u>Contact Email</u><p> Sales: sales@sans.co.zw<br/>Technical Support: support@sans.co.zw<br/>Information: simukai@sans.co.zw, samantha@sans.co.zw </p>
    <u>Contact Telephone</u><p>+263 783 767 859 <br/> +263 775 682 734 <br/> +263 773 447 311

    </div>
    <div class="large-3 medium-6 small-12 columns">
        <p><b>Sales Representatives</b></p>
        <p>We are looking for talented people to work with in selling SANS Exposure merchandise. If you are intrested in selling on behalf of us
        for comission on every item sold then contact us and you can become a part of this great experience. Work at your own time, at your own pace
        and get paid for selling great merchandise. If you are interested send an email to sales@sans.co.zw and be a part of SANS Exposure!</p>
    </div>
    <div class="large-3 medium-6 small-12 columns">
<p><b>Payment on SANS Exposure</b></p>
<p align="left"><a href="https://www.paynow.co.zw/Transaction/Comments/1437">SANS Exposure is a Verified Merchant & Secure to recieve online payments with PayNow. You can pay via Visa, Master Card, EcoCash & TeleCash. Click here to find out more.</a></p>
<a href="https://www.paynow.co.zw/Transaction/Comments/1437"><img src="http://sans.co.zw/client_side/sans/images/verified_merchant.png"/></a>
    </div>
    <div class="large-3 medium-6 small-12 columns">
    <p><b>About SANS Exposure</b></p>
        <a href="<?php echo $url?>about/">Our story</a><br/>
        <a href="<?php echo $url?>disclaimer/">Disclaimer</a>

        <br/><br/><br/><p><b>Social Media</b></p>
        Like us on Facebook: <a href="https://www.facebook.com/sans.exposure">SANS_Exposure</a><br/>
        Follow us on Twitter: <a href="http://www.twitter.com/sans_exposure">@sans_exposure</a>
    </div>

    <div class="large-12 medium-12 small-12 columns" align="center">
    © Copyright 2014 SANS Exposure
    </div>
</div>
    <!--JQuery -->
    <script src="<?php echo $url?>client_side/sans/bower_components/jquery/jquery.min.js"></script>
    <!---->

    <!-- FOundation -->
    <script src="<?php echo $url?>client_side/sans/bower_components/foundation/js/foundation.min.js"></script>
    <!---->


    <!-- handlebars -->
    <script src="<?php echo $url?>client_side/sans/bower_components/handlebars/handlebars-v2.0.0.js"></script>

    <!-- handlebars templates -->
    <script id="template-left" type="text/x-handlebars-template">
        <div class="panel th">
        <img width="350" height="400" src="{{imgUrl this}}" class=""/>
        <div class="small-12 large-12 medium-12 columns desc" align="left"><br/>
            <div class="small-12 large-12 medium-12 cloumns desc">{{item_name}} </div><br/>
            <div class="small-12 large-12 medium-12 cloumns desc">by {{designer}}</div><br/></div><br/><br/>
        <div class="small-12 large-12 medium-12 columns desc" align="left"><br/>
            ${{price}} {{sex this}}<br/>
            </div>
            <div class="small-12 large-12 medium-12 columns desc" align="center">
                <a href="<?php echo $url;?>catalogue/view/{{code}}" class="button success expand">View More</a>
            </div>
        </div>
    </script>
    <script id="template-right" type="text/x-handlebars-template">
        <div class="panel th">
        <img width="350" height="400" src="{{imgUrl this}}" class=""/>
        <div class="small-12 large-12 medium-12 columns desc" align="left"><br/>
            <div class="small-12 large-12 medium-12 cloumns desc">{{item_name}} </div><br/>
            <div class="small-12 large-12 medium-12 cloumns desc">by {{designer}}</div><br/></div><br/><br/>
        <div class="small-12 large-12 medium-12 columns desc" align="left"><br/>
            ${{price}} {{sex this}}<br/>
            </div>
            <div class="small-12 large-12 medium-12 columns desc" align="center">
                <a href="<?php echo $url;?>catalogue/view/{{code}}" class="button success expand">View More</a>
            </div>
        </div>
    </script>
    <!---->



    <!-- Slick slider -->
    <script src="<?php echo $url?>client_side/sans/slick/slick/slick.min.js"></script>

    <script type="text/javascript">
 $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
});
</script>
<!---->

<?php
if(isset($category)){
    switch ($category) {
    case '0': ?>
    <script src="<?php echo $url?>client_side/sans/js/0.js"></script>
 <?php   break;
    case '1' ?>
    <script src="<?php echo $url?>client_side/sans/js/1.js"></script>
  <?php  break;

    case '2': ?>
    <script src="<?php echo $url?>client_side/sans/js/2.js"></script>
 <?php  break;
}
}else{?>
    <script src="<?php echo $url?>client_side/sans/js/app.js"></script>
<?php }
?>



  </body>
</html>
