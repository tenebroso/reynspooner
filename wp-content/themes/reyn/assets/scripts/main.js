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
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        var dropdownParent = $('.menu-item-has-children');
        var el = $('body');
        var height = $('.banner').outerHeight();
        var didScroll = false;

        el.css('padding-top',height);

        dropdownParent.click(function(e){
          e.preventDefault();
          $(this).toggleClass('dropdown-open');
          el.toggleClass('nav-open');
        });

        

        $(window).scroll(function() {
          didScroll = true;
        });

        setInterval(function() {
          if ( didScroll ) {
            didScroll = false;
            var scroll = $(window).scrollTop();
            if(scroll >= height) {
              el.addClass('scrolled');
            } else {
              el.removeClass('scrolled');
            }
            
          }
        }, 250);

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        $('.home--slider').slick({
          dots:true,
          arrows:false
        });
        var feed = new Instafeed({
            get: 'user',
            userId: 460296244,
            accessToken: '3694438.467ede5.91f85516e10944e082528454ae16176e',
            clientId: '76e3153ed84f4408bd0279651e612c1c',
            limit: 6,
            resolution: 'standard_resolution',
            sortBy: "least-recent",
            template: '<a class="chocolat-image" href="{{image}}"><img class="pull-left" src="{{image}}" /></a>',
            after: function () {
              $('#instafeed').Chocolat({imageSize: 'contain'});
            }
        });
        feed.run();
        
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // page
    'product': {
      init: function(){
        var $price = $('#price-preview > .money').text();
        var priceTokens = $price.split('.');
        $('#price-preview > .money').empty().html('<span class="dollar">' + priceTokens[0] + '</span><span class="cents">.' + priceTokens[1] + '</span>');

        var $price = $('#price-preview del .money').text();
        var priceTokens = $price.split('.');
        $('#price-preview del .money').empty().html('<span class="dollar">' + priceTokens[0] + '</span><span class="cents">.' + priceTokens[1] + '</span>');

      }
    },
    // About us page, note the change from about-us to about_us.
    'community': {
      init: function() {
        $('#dcsns-filter li a').addClass('fa');
        $('.f-facebook a').addClass('fa-facebook');
        $('.f-pinterest a').addClass('fa-pinterest');
        $('.f-twitter a').addClass('fa-twitter');
        $('.f-instagram a').addClass('fa-instagram');
      }
    },
    'fit_guide': {
      init: function() {
        var $trigger = $('.js-filter');
        var $container = $('#fit-guide');

        $trigger.click(function(e) {
          e.preventDefault();
          $(this).addClass('active');
          $trigger.not($(this)).removeClass('active');
          $container.addClass('transparent');
          setTimeout(function () {
            $container.removeClass('transparent');
          }, 800);
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
