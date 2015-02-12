
$(function() { //<- shortcut for $(document.ready(function())
    //slick slider for image item view
 $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
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

//owl carousel home page slider
$("#slider").owlCarousel({
    autoPlay : 5000,
    paginationSpeed : 2000,
    goToFirstSpeed : 2000,
    singleItem : true,
    itemsScaleUp : false,
    stopOnHover : true,
    navigation: false,
    navigationText: ["<<",">>"],
    paginationNumbers: false,
    //responsiveRefreshRate: 300,
    theme : "owl-theme",
    autoHeight : false,
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    //items : 2,
    //itemsDesktop : [1199,2],
    //itemsDesktopSmall : [979,2]
    });  

//open and close side bar
  $('#menu-open')
  .on('click', function(){
    $('#side-bar')
      .sidebar('setting', {
                dimPage          : false,
                transition       : 'overlay',
                mobileTransition : 'overlay'
              })
      .sidebar('toggle')
  })

//make dropdown work
$('.ui.dropdown')
  .dropdown();
});

//quantity shopping cart drop down
$('#select')
  .dropdown()
;
//delivery method
$('.ui.radio.checkbox')
  .checkbox()
;


//get and set default values to input type hidden
$(function(){
   document.getElementById('size').value =  "   
                                            sizes: 
                                              [US - "+ $('#us').val() + "" +
                                            " [US Named Size - " + $('#usnamed').val() + "" +
                                            " [UK - " + $('#uk').val() +"" +
                                            " [France -" + $('#france').val() +"" +
                                            " [Germany -" + $('#germany').val() +"" +
                                            " [Italy -" + $('#italy').val() +"" +
                                            " [Australia - " + $('#australia').val() +"" +
                                            " [Japan -  " + $('#japan').val() +"" +
                                            " [Europe - "+ $('europe').val()+"" +
                                            " [Inches - "+ $('#inches').val() + "" +
                                            " [centimeters - " + $('#centimeters').val() + ""
});

//conversion table women sizes
function changeSizes2(which) { 
    for (var i = 0; i<document.clothes.elements.length; i++) {
        if ((document.clothes.elements[i].type == 'select-one')) {
            document.clothes.elements[i].selectedIndex = which;
        }
  } 
  
  document.getElementById('size').value =  "   
                                            sizes: 
                                              [US - "+ $('#us').val() + "" +
                                            " [US Named Size - " + $('#usnamed').val() + "" +
                                            " [UK - " + $('#uk').val() +"" +
                                            " [France -" + $('#france').val() +"" +
                                            " [Germany -" + $('#germany').val() +"" +
                                            " [Italy -" + $('#italy').val() +"" +
                                            " [Australia - " + $('#australia').val() +"" +
                                            " [Japan -  " + $('#japan').val() +""
                                            

  //console.log( $('#us').val());
  //console.log( $('#usnamed').val());
  //console.log( $('#uk').val());
  //console.log( $('#france').val());
  //console.log( $('#germany').val());
  //console.log( $('#italy').val());
  //console.log( $('#australia').val());
  //console.log( $('#japan').val());
}

//conversion table for mens sizes 
function changeSizes(which,form) {
    for (var i = 0; i<form.elements.length; i++) {
        if ((form.elements[i].type == 'select-one')) {
            form.elements[i].selectedIndex = which;
        }
    }

      document.getElementById('size').value =  "   
                                            sizes: 
                                              [US - "+ $('#us').val() + "" +
                                            " [US Named Size - " + $('#usnamed').val() + "" +
                                            " [UK - " + $('#uk').val() +"" +
                                            " [France -" + $('#france').val() +"" +
                                            " [Germany -" + $('#germany').val() +"" +
                                            " [Italy -" + $('#italy').val() +"]" +
                                            " [Australia - " + $('#australia').val() +"" +
                                            " [Japan -  " + $('#japan').val() +""+
                                            "[Europe - "+ $('europe').val()+"" 

}

function changeSizes3(which,form) {
    for (var i = 0; i<form.elements.length; i++) {
        if ((form.elements[i].type == 'select-one')) {
            form.elements[i].selectedIndex = which;
        }
    }

      document.getElementById('size').value =  "   
                                            sizes: 
                                              [Inches - "+ $('#inches').val() + "" +
                                            " [centimeters - " + $('#centimeters').val() + ""

}
  


