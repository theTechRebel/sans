// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

  (function(){
    var Sans ={
        init: function(object){
            this.object = object

            this.compileTemplates();
            this.hideElements();
            this.reportEvents();
        },

        hideElements: function(){
          this.object.pagination_links.hide();
        },

        reportEvents: function(){
          this.object.window_object.on('scroll', function(){
            Sans.loadContent()
          })
        },

        getDocumentHeight: function(){
        return Math.max(Sans.object.document_object.body.scrollHeight, Sans.object.document_object.documentElement.scrollHeight,
                        Sans.object.document_object.body.offsetHeight, Sans.object.document_object.documentElement.offsetHeight,
                        Sans.object.document_object.body.clientHeight, Sans.object.document_object.documentElement.clientHeight)
        },

        loadContent: function(){
          if(Sans.object.window_object.scrollTop() + Sans.object.window_object.height() > (0.75 * Sans.getDocumentHeight()) && Sans.object.getData == true){
            Sans.object.getData = false
            $.ajax({
              url: 'http://localhost/sans/api/ajaxRequest/'+Sans.object.requestParameter+'/0',
              dataType: 'json'
            })
            .done(function(response){
              //console.log(response[0])
              //Sans.object.htmlDiv.append(Sans.object.template1(response[0]))
              Sans.object.htmlDiv1.append(Sans.object.template2(response[0]))
              Sans.object.htmlDiv2.append(Sans.object.template3(response[1]))

              Sans.object.getData = true // comment this out
              Sans.object.requestParameter += 2 //and this too, to give the eternal scroll
            })
            .fail(function(){
              Sans.object.getData = false;
              Sans.object.requestParameter = 0
            })
            .always(function(){
              //Sans.object.getData = true
              //Sans.object.requestParameter += 3
            })
          }

        },

        compileTemplates: function(){
          //Sans.object.template1 = Handlebars.compile(Sans.object.template1)
          Sans.object.template2 = Handlebars.compile(Sans.object.template2)
          Sans.object.template3 = Handlebars.compile(Sans.object.template3)

          Handlebars.registerHelper('imgUrl', function(result){
            return "http://localhost/sans/"+result.pic
          })

          Handlebars.registerHelper('sex', function(result){
            switch(result.sex){
              case "0":
              return "women"
              break;

              case "1":
              return "men"
              break;

              case "2":
              return "unisex"
              break;
            }
        })

    }
  }

    Sans.init({
      pagination_links: $('div#pagination').hide(),
      window_object: $(window),
      document_object: document,
      //template1: $('#template1').html(),
      template2: $('#template-left').html(),
      template3: $('#template-right').html(),
      htmlDiv1: $('div#ajaxRight'),
      htmlDiv2: $('div#ajaxLeft'),
      getData: true,
      requestParameter: 4
    });
  })();
