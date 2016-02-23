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

  var wpUrl = 'https://www.reynspooner.com';

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {

        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        }

        $('.footer-signup--button').on('click', function(e){
          var value = $(this).prev().prev().prev().prev().val();

           if( !isValidEmailAddress(value) ) {  $('form[name="embedded_signup"]').addClass('error'); return; } else {
            $('form[name="embedded_signup"]').removeClass('error');
           }
         });

        if($('.slick-slider').length > 0) {
          $(window).resize(function(){
            location.reload();
          });
        }

        if($(window).width() < 768) {
          $('.footer-signup--input').prop('placeholder','Enter your email').css('text-align','left');
        }

        var dropdownParent = $('.menu-item-has-children > a');
        var el = $('body');
        var height = $('.banner').outerHeight();
        var didScroll = false;

        el.css('padding-top',height);

        $( window ).resize(function() {
          var height = $('.banner').outerHeight();
          el.css('padding-top',height);
        });

        el.fitVids();

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

        $('.js-search-expand').on('click', function(e){
          e.preventDefault();
          el.toggleClass('search-expanded');
        });

        Handlebars.registerHelper('each_when', function(list, k, v, opts) {
            var i, result = '';
            for(i = 0; i < list.length; ++i) {
              if(list[i][k] === v) {
                result = result + opts.fn(list[i]);
              }
            }
            return result;
        });

        var reyn = {
          nav: {
              template: Handlebars.compile($('#primaryNav').html()),
              templateFive: Handlebars.compile($('#primaryNavFive').html()),
              partials: {
                column: Handlebars.registerPartial("column", $("#column-partial").html()),
                giftCard: Handlebars.registerPartial("giftcard", $("#gift-card-partial").html())
              },
              primary: {},
              container: $('#menu-main-navigation'),
              mobile: $('#menu-mobile-navigation')
          }
        };

        function successfulApi() {

          sessionStorage.setItem('reynNavigation', JSON.stringify(reyn.nav.primary));

          if(reyn.nav.primary.five.length > 0) {
            $(reyn.nav.container).append( reyn.nav.templateFive({items:reyn.nav.primary}) );
            $(reyn.nav.mobile).prepend( reyn.nav.templateFive({items:reyn.nav.primary}) );
            $('#menu-main-navigation .sub-menu .col-md-3').addClass('five-columns');
          } else {
            $(reyn.nav.container).append( reyn.nav.template({items:reyn.nav.primary}) );
            $(reyn.nav.mobile).prepend( reyn.nav.template({items:reyn.nav.primary}) );
          }
        }

        function failedApi() {
            reyn.nav.primary = {"five":[],"main":[{"ID":1907,"order":1,"parent":0,"title":"Shop","url":"http://shop.reynspooner.com/collections/all","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1907,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1908,"order":2,"parent":0,"title":"Lookbook","url":"http://shop.reynspooner.com/pages/lookbook","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1908,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1909,"order":3,"parent":0,"title":"Legacy","url":"https://www.reynspooner.com/legacyheritage/","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1909,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1910,"order":4,"parent":0,"title":"Community","url":"https://www.reynspooner.com/community/","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1910,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1911,"order":5,"parent":0,"title":"Reyn's Rewards","url":"http://shop.reynspooner.com/pages/reyns-rewards","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1911,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}],"three":[{"ID":1919,"order":1,"parent":0,"title":"Women & Accessories","url":"http://shop.reynspooner.com/collections/womens-accessories","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1919,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1920,"order":2,"parent":1919,"title":"Sarong Scarves","url":"http://shop.reynspooner.com/collections/womens-accessories-sarong-scarves","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1920,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1921,"order":3,"parent":1919,"title":"Purses","url":"http://shop.reynspooner.com/collections/womens-accessories-bags","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1921,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1955,"order":4,"parent":1919,"title":"Eco Bags","url":"http://shop.reynspooner.com/collections/womens-accessories-eco-bags","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1955,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1957,"order":5,"parent":1919,"title":"Backpacks, Duffles, Totes","url":"http://shop.reynspooner.com/collections/backpacks-duffles-totes","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1957,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1956,"order":6,"parent":1919,"title":"Hats & Towels","url":"http://shop.reynspooner.com/collections/womens-accessories-hats-towels","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1956,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1958,"order":7,"parent":1919,"title":"Decorative Pillows","url":"http://shop.reynspooner.com/collections/womens-accessories-decorative-pillows","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1958,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}]},{"ID":1922,"order":8,"parent":0,"title":"New Arrivals","url":"http://shop.reynspooner.com/collections/womens-accessories-new-arrivals","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1922,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1923,"order":9,"parent":0,"title":"Limited Editions","url":"http://shop.reynspooner.com/collections/womens-accessories-limited-edition","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1923,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1945,"order":10,"parent":0,"title":"Heritage Collection","url":"http://shop.reynspooner.com/collections/womens-accessories-heritage-collection","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1945,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1946,"order":11,"parent":0,"title":"On Sale","url":"http://shop.reynspooner.com/collections/womens-accessories-on-sale","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1946,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}],"four":[{"ID":1912,"order":1,"parent":0,"title":"Prints","url":"http://shop.reynspooner.com/collections/prints","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1912,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1913,"order":2,"parent":1912,"title":"Limited Edition","url":"http://shop.reynspooner.com/collections/prints-limited-edition","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1913,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1915,"order":3,"parent":1913,"title":"2016 Year of the Monkey","url":"http://shop.reynspooner.com/collections/2016-year-of-the-monkey","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1915,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1916,"order":4,"parent":1913,"title":"I'a Ku \"School of Fish\"","url":"http://shop.reynspooner.com/collections/ia-ku","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1916,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1947,"order":5,"parent":1913,"title":"Loke \"Small Rose\"","url":"http://shop.reynspooner.com/collections/loke","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1947,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1948,"order":6,"parent":1913,"title":"Heliconia","url":"http://shop.reynspooner.com/collections/heliconia","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1948,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1949,"order":7,"parent":1913,"title":"Summer Commemorative","url":"http://shop.reynspooner.com/collections/summer-commemorative","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1949,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1950,"order":8,"parent":1913,"title":"Hawaiian Christmas","url":"http://shop.reynspooner.com/collections/hawaiian-christmas","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1950,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}]},{"ID":1914,"order":9,"parent":1912,"title":"Heritage","url":"http://shop.reynspooner.com/collections/prints-heritage-collection","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1914,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1917,"order":10,"parent":1914,"title":"Lahaina Sailor","url":"http://shop.reynspooner.com/collections/lahaina-sailor","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1917,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1918,"order":11,"parent":1914,"title":"Personal Paradise","url":"http://shop.reynspooner.com/collections/personal-paradise","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1918,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1951,"order":12,"parent":1914,"title":"West Coastin","url":"http://shop.reynspooner.com/collections/west-coastin","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1951,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}]}]}],"one":[{"ID":1931,"order":1,"parent":0,"title":"Men's","url":"http://shop.reynspooner.com/collections/mens","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1931,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1932,"order":2,"parent":1931,"title":"Short Sleeve","url":"http://shop.reynspooner.com/collections/mens-short-sleeve-shirts","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1932,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1933,"order":3,"parent":1931,"title":"Long Sleeve","url":"http://shop.reynspooner.com/collections/mens-long-sleeve-shirts","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1933,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1936,"order":4,"parent":1931,"title":"Tees","url":"http://shop.reynspooner.com/collections/mens-tees","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1936,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1937,"order":5,"parent":1931,"title":"Pants & Shorts","url":"http://shop.reynspooner.com/collections/mens-shorts-and-pants","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1937,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1952,"order":6,"parent":1931,"title":"Swim","url":"http://shop.reynspooner.com/collections/mens-swim","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1952,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1953,"order":7,"parent":1931,"title":"Sweaters / Jackets","url":"http://shop.reynspooner.com/collections/mens-outwear","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1953,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1954,"order":8,"parent":1931,"title":"Accessories","url":"http://shop.reynspooner.com/collections/mens-accessories","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1954,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}]},{"ID":1934,"order":9,"parent":0,"title":"New Arrivals","url":"http://shop.reynspooner.com/collections/mens-new-arrivals","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1934,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1935,"order":10,"parent":0,"title":"Limited Editions","url":"http://shop.reynspooner.com/collections/mens-limited-edition","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1935,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1938,"order":11,"parent":0,"title":"Heritage Collection","url":"http://shop.reynspooner.com/collections/mens-heritage-collection","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1938,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1939,"order":12,"parent":0,"title":"Indigo Collection","url":"http://shop.reynspooner.com/collections/indigo","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1939,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1940,"order":13,"parent":0,"title":"On Sale","url":"http://shop.reynspooner.com/collections/mens-on-sale","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1940,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}],"two":[{"ID":1924,"order":1,"parent":0,"title":"Kids","url":"http://shop.reynspooner.com/collections/kids","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1924,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1925,"order":2,"parent":1924,"title":"Boys","url":"http://shop.reynspooner.com/collections/boys","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1925,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1926,"order":3,"parent":1925,"title":"12M - 4T","url":"http://shop.reynspooner.com/collections/boys-12m-4t","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1926,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1941,"order":4,"parent":1925,"title":"6yr - 16yr","url":"http://shop.reynspooner.com/collections/boys-6yr-16yr","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1941,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}]},{"ID":1927,"order":5,"parent":1924,"title":"Girls","url":"http://shop.reynspooner.com/collections/girls","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1927,"object":"custom","type":"custom","type_label":"Custom Link","children":[{"ID":1928,"order":6,"parent":1927,"title":"6M - 4T","url":"http://shop.reynspooner.com/collections/girls-6m-4t","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1928,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1942,"order":7,"parent":1927,"title":"6yr - 16yr","url":"http://shop.reynspooner.com/collections/girls-6yr-16yr","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1942,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}]}]},{"ID":1929,"order":8,"parent":0,"title":"New Arrivals","url":"http://shop.reynspooner.com/collections/kids-new-arrivals","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1929,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1930,"order":9,"parent":0,"title":"Limited Editions","url":"http://shop.reynspooner.com/collections/kids-limited-edition","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1930,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1943,"order":10,"parent":0,"title":"Heritage Collection","url":"http://shop.reynspooner.com/collections/kids-heritage-collection","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1943,"object":"custom","type":"custom","type_label":"Custom Link","children":[]},{"ID":1944,"order":11,"parent":0,"title":"On Sale","url":"http://shop.reynspooner.com/collections/kids-on-sale","attr":"","target":"","classes":"","xfn":"","description":"","object_id":1944,"object":"custom","type":"custom","type_label":"Custom Link","children":[]}]}

            $(reyn.nav.container).append( reyn.nav.template({items:reyn.nav.primary}) );
            $(reyn.nav.mobile).prepend( reyn.nav.template({items:reyn.nav.primary}) );
        }

        var storedNav = sessionStorage.getItem('reynNavigation');

        if(storedNav && storedNav !== null) {
          reyn.nav.primary = JSON.parse(storedNav);
          successfulApi();
        } else {
          $.when(
            $.getJSON( wpUrl + '/wp-json/menu-locations/primary_navigation').done(function( data ) {
              reyn.nav.primary.main = data;
            }),
            $.getJSON( wpUrl + '/wp-json/menu-locations/column_one').done(function( data ) {
              reyn.nav.primary.one = data;
            }),
            $.getJSON( wpUrl + '/wp-json/menu-locations/column_two').done(function( data ) {
              reyn.nav.primary.two = data;
            }),
            $.getJSON( wpUrl + '/wp-json/menu-locations/column_three').done(function( data ) {
              reyn.nav.primary.three = data;
            }),
            $.getJSON( wpUrl + '/wp-json/menu-locations/column_four').done(function( data ) {
              reyn.nav.primary.four = data;
            }),
            $.getJSON( wpUrl + '/wp-json/menu-locations/column_five').done(function( data ) {
              reyn.nav.primary.five = data;
            })
          ).then(successfulApi, failedApi);

        }

         $('.secondary-nav').find('.currency-dropdown.account--nav-item > a').on('click', function(e){
          var windowWidth = $(window).width();

          if(windowWidth >= 992) {
            if($(this).parent().hasClass('open')){
               return;
             }
              e.preventDefault();
            $(this).parent().toggleClass('visible');
            $('.secondary-nav--container').toggleClass('visible');
              $('.account--dropdown').toggleClass('visible');
          } else {
           return;
          }
        });

      },
      finalize: function() {
         var dropdownParent = $('.menu-item-has-children > a');
         var el = $('body');
         var height = $('.banner').outerHeight();

         el.css('padding-top',height - 1);

        $( window ).resize(function() {
          var height = $('.banner').outerHeight();
          el.css('padding-top',height - 1);
        });

        $('#menu-main-navigation').on('click', '.menu-item-has-children > a', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('dropdown-open');
          el.toggleClass('nav-open');
        });

        $('.mobile-navigation').on('click', '.menu-item-has-children > a', function(e) {
          e.preventDefault();
          $(this).parent().toggleClass('dropdown-open');
        });

        $('.mobile-navigation').on('click', 'h4', function(e) {
          e.preventDefault();
          //$('.mobile-navigation .fa').attr('class','fa fa-angle-up');
          $(this).find('.fa').toggleClass('spin');
          $(this).nextAll().slice(0, 2).toggleClass('opened');
        });

        $('.js-menu-expand').on('click', function(e){
          e.preventDefault();

          $('.mobile-navigation').toggleClass('open');
          $('.mobile-nav-trigger').toggleClass('close');
           el.toggleClass('nav-open');
           $("html, body").animate({ scrollTop: 0 }, 500);
        });

        $('.js-scroll-top').on('click', function(e){
          e.preventDefault();
          $('.mobile-navigation').removeClass('open');
          $('.mobile-nav-trigger').removeClass('close');
          $("html, body").animate({ scrollTop: 0 }, 500);
        });


      }
    },
    // Home page
    'home': {
      init: function() {
        $('.home--slider').slick({
          dots:true,
          arrows:true,
          adaptiveHeight:true,
          autoplay:true,
          autoplaySpeed: 4000
        });
        var feed = new Instafeed({
            get: 'user',
            userId: 460296244,
            accessToken: '3694438.467ede5.91f85516e10944e082528454ae16176e',
            clientId: '76e3153ed84f4408bd0279651e612c1c',
            limit: 6,
            resolution: 'standard_resolution',
            sortBy: "least-recent",
            template: '<a class="chocolat-image" href="{{image}}"><img class="pull-left" src="{{image}}" /><span class="ig-hover"><span class="v-centered">{{caption}}</span></span></a>',
            after: function () {
              var $images = $('#instafeed').find('img');
              var $collection = JSON.stringify($images);
              $('#instafeed').Chocolat({imageSize: 'contain'});

              //console.log($collection);
              //$.each($images, function( index, value ) {
               // console.log( index.src + ": " + value );
              //});
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
        // var $price = $('#price-preview > .money').text();
        // var priceTokens = $price.split('.');
        // $price.empty().html('<span class="dollar">' + priceTokens[0] + '</span><span class="cents">.' + priceTokens[1] + '</span>');

        // var $priceDeleted = $('#price-preview del .money').text();
        // var priceTokensDeleted = $price.split('.');
        // $priceDeleted.empty().html('<span class="dollar">' + priceTokensDeleted[0] + '</span><span class="cents">.' + priceTokensDeleted[1] + '</span>');

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
          // e.preventDefault();
          // $(this).addClass('active');
          // $trigger.not($(this)).removeClass('active');
          // $container.addClass('transparent');
          // setTimeout(function () {
          //   $container.removeClass('transparent');
          // }, 800);
        });
      }
    },
    'contact_us': {
      init: function() {
        var $button = $('.gform_button');

      }
    },
    'legacyheritage': {
      init:function(){
        //$('.legacy-block').each(function(){
         // $('.legacy-block--image-right').before('.legacy-block-container');
        //});
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
