/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      $('.navbar .dropdown').hover(function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

      }, function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

      });

      $('.navbar .dropdown > a').click(function(){
      location.href = this.href;
      });

      $('.nav.nav-justified').scrollToFixed({ zIndex: 1027, minWidth: 768 });


      $(function () {
        $('[data-toggle="popover"]').popover({ html: true });
      });

    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page

      // News Slider fotorama initialization

      $(function () {
        // 1. Initialize fotorama manually.
        var $fotoramaDiv = $('.fotorama_custom').fotorama({
          loop: true,
          autoplay: 6000,
          allowfullscreen: false,
          nav: 'dots',
          width: "100%",
          minheight: "300",
          maxheight: "600",
          height: "100%",
          arrows: true,
          click: false,
          swipe:false,
          margin: "0"
        });

        // 2. Get the API object.
        var fotorama = $fotoramaDiv.data('fotorama');

        // 3. Inspect it in console.
      //  console.log(fotorama);

        jQuery('.destaque-prev').click(function () {
            fotorama.show('<');
        });
        jQuery('.destaque-next').click(function () {
            fotorama.show('>');
        });

      });

/*
      // JS equal height columns

      equalheight = function(container){

      var currentTallest = 0,
           currentRowStart = 0,
           rowDivs = [],
           $el,
           topPosition = 0;
       $(container).each(function() {

         $el = $(this);
         $($el).height('auto');
         topPostion = $el.position().top;

         if (currentRowStart !== topPostion) {
           for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
             rowDivs[currentDiv].height(currentTallest);
           }
           rowDivs.length = 0; // empty the array
           currentRowStart = topPostion;
           currentTallest = $el.height();
           rowDivs.push($el);
         } else {
           rowDivs.push($el);
           currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
         for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
           rowDivs[currentDiv].height(currentTallest);
         }
       });
      };

      $(window).load(function() {
        equalheight('.latest .block');
      });


      $(window).resize(function(){
        equalheight('.latest .block');
      });
*/
    }
  },
  // About us page, note the change from about-us to about_us.
  about: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(function() {
          
          var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
          $fluidEl = $(".abtvideo");
              
        $allVideos.each(function() {
        
          $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');
        
        });
        
        $(window).resize(function() {
        
          var newWidth = $fluidEl.width();
          $allVideos.each(function() {
          
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));
          
          });
        
        }).resize();

      });
    }
  },
  sobre: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(function() {
          
          var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
          $fluidEl = $(".abtvideo");
              
        $allVideos.each(function() {
        
          $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');
        
        });
        
        $(window).resize(function() {
        
          var newWidth = $fluidEl.width();
          $allVideos.each(function() {
          
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));
          
          });
        
        }).resize();

      });
    }
  },
  a_propos: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(function() {
          
          var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
          $fluidEl = $(".abtvideo");
              
        $allVideos.each(function() {
        
          $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');
        
        });
        
        $(window).resize(function() {
        
          var newWidth = $fluidEl.width();
          $allVideos.each(function() {
          
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));
          
          });
        
        }).resize();

      });
    }
  },
  uber: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(function() {
          
          var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
          $fluidEl = $(".abtvideo");
              
        $allVideos.each(function() {
        
          $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');
        
        });
        
        $(window).resize(function() {
        
          var newWidth = $fluidEl.width();
          $allVideos.each(function() {
          
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));
          
          });
        
        }).resize();

      });
    }
  },
  acerca: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(function() {
          
          var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
          $fluidEl = $(".abtvideo");
              
        $allVideos.each(function() {
        
          $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');
        
        });
        
        $(window).resize(function() {
        
          var newWidth = $fluidEl.width();
          $allVideos.each(function() {
          
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));
          
          });
        
        }).resize();

      });
    }
  },

  archive: {
    init: function() {
      // JavaScript to be fired on archive pages

//      $('.en .dz_breadcrumb').scrollToFixed({ marginTop: 65 });
//      $('.dz_breadcrumb').scrollToFixed({ marginTop: $('.navbar').outerHeight() + 0, });

      $('.widget_product_search').scrollToFixed({ marginTop: $('.navbar').outerHeight() + $('.dz_breadcrumb').outerHeight() + 20, minWidth: 768 });
      $('.widget_layered_nav').scrollToFixed({ marginTop: $('.navbar').outerHeight() + $('.dz_breadcrumb').outerHeight() + $('.widget_product_search').outerHeight() + 20, minWidth: 768 });
      $('.widget_product_categories').scrollToFixed({ marginTop: $('.navbar').outerHeight() + $('.dz_breadcrumb').outerHeight() + $('.widget_product_search').outerHeight() + $('.widget_layered_nav').outerHeight() + 30, minWidth: 768 });

      $('.widget_search').scrollToFixed({ marginTop: $('.navbar').outerHeight() + 0, minWidth: 768 });
      $('.widget_recent_entries').scrollToFixed({ marginTop: $('.navbar').outerHeight() + $('.widget_search').outerHeight() + 20, minWidth: 768 });
      $('.widget_archive').scrollToFixed({ marginTop: $('.navbar').outerHeight() + $('.widget_search').outerHeight() + $('.widget_recent_entries').outerHeight() + 25, minWidth: 768 });
    
      // $('footer').scrollToFixed( { bottom: 0, limit: $('.footwrap').offset().top } );
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
