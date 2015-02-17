
<?php if(isset($fullWindow)){ ?>
<style type="text/css">
  #sticky {
  position: absolute;
  bottom: 0;
}
</style>
<?php }?>
<div id="sticky" class="ui inverted black footer vertical segment">
          <div id="footer" class="container">
            <div class="ui stackable inverted divided relaxed grid">
              <div class="four wide column">
                <h3 class="ui inverted header">SANS Exposure.</h3>
                <p>
                6th Floor Batanai Gardens, Corner First Street and Jason Moyo Avenue, Harare, Zimbabwe</p>
              </div>
              <div class="four wide column">
                <h5 class="ui teal inverted header">Telephone.</h5>
                <div class="ui inverted link list">
                  <p>
                  +263 783 767 859 <br/>
                  +263 775 682 734 <br/>
                  +263 773 447 311<br/>
                </div>
              </div>
              <div class="four wide column">
                <h5 class="ui teal inverted header">Email.</h5>
                <div class="ui inverted link list">
                  <p>
                  sales@sans.co.zw<br/>
                  support@sans.co.zw <br/>
                  simukai@sans.co.zw <br/>
                  samantha@sans.co.zw</p>
                </div>
              </div>
              <div class="four wide column">
                <h5 class="ui teal inverted header">Payment.</h5>
                <div class="ui inverted link list">
                  <a class="item" href="https://www.paynow.co.zw/Transaction/Comments/1437" target="_blank">SANS Exposure is a Verified Merchant & Secure to recieve online payments with PayNow. You can pay via Visa, Master Card, EcoCash & TeleCash. Click here to find out more.</a>
                </div>
              </div>

              <!-- <div class="four wide column">
                <h5 class="ui teal inverted header">Connect.</h5>
                <div class="ui inverted link list">
                  <a class="item" href="http://legacy.semantic-ui.com">About SANS Exposure</a>
                  <a class="item" href="http://www.learnsemantic.com">Disclaimer</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
<script type="text/javascript" src="<?php echo $url?>uiux/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>uiux/slimmage-0.4.1/slimmage.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>uiux/semantic-ui/semantic.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>uiux/owlcar/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>uiux/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>uiux/js/main.min.js"></script>
<?php if(isset($fullWindow)){ ?>
<script type="text/javascript">
/*
Sticky footer plugin for jQuery
Run on window.load instead of domready, in case any loading images change the page dimensions after domready.

by Ville V. Vanninen / http://foolproof.me
*/
$(window).load(function($) {

  var updateFooter = function ($footer_elm, options) {
    var window_height = jQuery(window).height();
    var body_offset_top = jQuery('body').offset().top;
    var body_outer_height = jQuery('body').outerHeight();
    var body_height = jQuery('body').height();
    body_bottom = (body_offset_top + body_outer_height) - ((body_outer_height - body_height)/2);
    var footer_height = $footer_elm.outerHeight(true);


    if (!$footer_elm.hasClass(options.class) && window_height > body_bottom) {
      $footer_elm.addClass(options.class);
    }
    else if ($footer_elm.hasClass(options.class) && window_height < body_bottom + footer_height + 1) {
      $footer_elm.removeClass(options.class);
    }

    var stickyfoo = $.fn.stickyfoo.defaults.NAMESPACE;
    $footer_elm.data(stickyfoo, 'initialized');
  };

  var methods = {
    init : function (options) {
      //Settings list and the default values
      var defaults = $.fn.stickyfoo.defaults;
      options = $.extend(defaults, options);
      methods.options = options;

      var stickyfoo = $.fn.stickyfoo.defaults.NAMESPACE;

      return this.each(function(index){
        var data = $(this).data(stickyfoo);
        // If the plugin hasn't been initialized on this element yet
        var $element = $(this);
        if (!data) {
          updateFooter($element, options);
        }
        $(window).bind('resize.'+stickyfoo, function(event) {
          updateFooter($element, options);
        });
        //scroll event in case of lazy loading content (which sucks btw)
        $(window).bind('scroll.'+stickyfoo, function(event) {
          updateFooter($element, options);
        });
      });

    },
    update: function () {
      this.init(methods.options);
    },
    destroy: function () {

      var stickyfoo = $.fn.stickyfoo.defaults.NAMESPACE;

      return this.each(function(){

        var $this = $(this),
        data = $this.data(stickyfoo);

        $(window).unbind('.' + stickyfoo);
        $this.removeData(stickyfoo);
        $this.removeClass(methods.options.class);
      });
    }
  };

  $.fn.stickyfoo = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || ! method) {
      return methods.init.apply(this, arguments);
    } else {
      $.error('Method ' +  method + ' does not exist on jQuery.stickyfoo');
    }
  };
  $.fn.stickyfoo.defaults = {
    class: 'sticky',
    NAMESPACE: 'stickyfoo'
  };

  })( jQuery );
</script>
<?php }?>
</body>
</html>