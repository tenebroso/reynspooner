<?php global $shopUrl; ?>
<header class="banner" role="banner">
  <div class="banner-nav--top secondary-nav--container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="banner-nav--top-quote">
            <?php the_field('header_quote','options'); ?>
          </div>
          <ul class="banner-nav--top-menu secondary-nav">
            <li><a href="/blog">Blog</a></li>
            <li><a href="<?php echo $shopUrl; ?>/apps/store-locator">Find a Store</a></li>
            <li class="account--nav-item currency-dropdown">
              <a href="<?php echo $shopUrl; ?>/account">Account <i class="fa fa-angle-down"></i></a>
              <div class="account--dropdown">
                <div class="account--header">
                  <p class="account--intro">Aloha!</p>
                  </div>
                  <ul class="account--nav-parent">
                    <li class="account--nav-item"><a href="<?php echo $shopUrl; ?>/account/login">Login</a></li>
                    <li class="account--nav-item"><a href="<?php echo $shopUrl; ?>/account/register">Create an Account</a></li>
                  </ul>
                </div>
            </li>
            <li><a href="<?php echo $shopUrl; ?>/apps/wishlist/"><i class="fa fa-plus"></i></a></li>
            <li><a href="<?php echo $shopUrl; ?>/cart"><span class="banner-nav--top-bag">
              <svg version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                 x="0px" y="0px" width="64.1px" height="73.2px" viewBox="0 0 64.1 73.2" style="enable-background:new 0 0 64.1 73.2;"
                 xml:space="preserve" class="banner-nav--top-bag-icon">
              <defs>
              </defs>
              <rect y="23.5" class="st0" width="64.1" height="49.8"/>
              <path class="st0" d="M50.2,18.3H46c0-7.8-6.3-14.1-14.1-14.1s-14.1,6.3-14.1,14.1h-4.2C13.6,8.2,21.8,0,31.9,0S50.2,8.2,50.2,18.3z"
                />
              </svg>
              </span></a></li>
            <li><a href="<?php echo $shopUrl; ?>/collections/all" class="js-search-expand">
              <i class="fa fa-search"></i>
            </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container banner-nav--container">
    <div class="row">
      <div class="col-xs-3">
          <a class="brand" href="/">
      <svg version="1.1"
         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
         x="0px" y="0px" width="267.8px" height="40.2px" viewBox="0 0 267.8 40.2" enable-background="new 0 0 267.8 40.2"
         xml:space="preserve" class="brand-logo">
      <defs>
      </defs>
      <g>
        <path d="M0,0.8h3.3h3.4v5C7,5.2,7.2,4.7,7.5,4.2C9.2,1.4,11.3,0,14,0l1.6,0v7.6c-0.6-0.1-1.3-0.1-2.1-0.1
          c-2.1,0-3.8,0.6-4.8,1.7c-1.1,1.1-1.6,2.8-1.6,5.1v14.6H3.5H0V0.8z"/>
        <path d="M52.9,29.5c-1.5,4.7-2.9,7.7-4,8.9c-1.1,1.2-3.1,1.8-5.9,1.8l-3.4-0.1v-6c0.2,0.1,0.6,0.1,1.4,0.1
          c1.9,0,3.1-0.4,3.7-1.2c0.4-0.5,0.7-1.6,1.1-3.2l-10-29.1h3.9h3.9l5.8,20.9h0l5.7-20.9h3.7h3.7L52.9,29.5z"/>
        <path d="M62.1,0.8h3.3h3.4v4.2c0.3-0.5,0.6-1,0.9-1.4C71.4,1.2,73.9,0,77.3,0c2.8,0,5,0.9,6.6,2.6
          c1.6,1.8,2.4,4.2,2.4,7.3v18.9h-3.5h-3.5V11.3c0-1.7-0.4-3-1.1-3.9c-0.7-0.8-1.8-1.3-3.3-1.3c-1.9,0-3.3,0.6-4.3,1.8
          c-1,1.2-1.5,2.9-1.5,5.1v15.9h-3.5h-3.5V0.8z"/>
        <path d="M112.9,9.2c0-1.1-0.4-2-1.3-2.6c-0.9-0.7-2-1-3.4-1c-1.4,0-2.4,0.2-3.2,0.7c-0.8,0.5-1.1,1.2-1.1,2.1
          c0,0.6,0.4,1.2,1.3,1.6c0.9,0.4,2.4,0.9,4.6,1.4c4.3,1,7.2,2.1,8.7,3.3c1.5,1.2,2.2,3.1,2.2,5.7c0,2.8-1.1,5-3.2,6.7
          c-2.1,1.7-4.9,2.5-8.4,2.5c-4.1,0-7.3-0.8-9.5-2.5c-2.2-1.7-3.4-4.1-3.6-7.2h7.2c0,1.3,0.6,2.3,1.6,3c1,0.7,2.5,1.1,4.2,1.1
          c1.4,0,2.5-0.3,3.3-0.8c0.8-0.5,1.2-1.2,1.2-2.1c0-0.6-0.4-1.2-1.2-1.6c-0.8-0.4-2.1-0.9-4.1-1.3c-4.5-1.1-7.5-2.2-9.1-3.4
          c-1.5-1.2-2.3-3-2.3-5.5c0-2.8,1-5,3-6.8c2-1.7,4.6-2.6,7.8-2.6c3.6,0,6.6,0.8,8.8,2.5c2.2,1.7,3.3,3.9,3.3,6.7H112.9z"/>
        <path d="M121.1,0.8h3.3h3.4v4.2l0.5-0.7c1.9-2.8,4.4-4.2,7.5-4.2c3.4,0,6.1,1.3,8.2,4c2.1,2.6,3.1,6.1,3.1,10.4
          c0,4.6-1,8.3-3.1,11c-2.1,2.8-4.8,4.2-8.2,4.2c-3.1,0-5.6-1.3-7.5-3.9l-0.1-0.2v14.4h-3.5h-3.5V0.8z M133.8,23.5
          c1.9,0,3.4-0.7,4.4-2.2c1.1-1.5,1.6-3.6,1.6-6.2c0-2.7-0.5-4.8-1.6-6.4c-1.1-1.5-2.5-2.3-4.4-2.3c-1.9,0-3.4,0.8-4.4,2.4
          c-1.1,1.6-1.6,3.8-1.6,6.5c0,2.6,0.5,4.6,1.6,6C130.4,22.8,131.9,23.5,133.8,23.5z"/>
        <path d="M149.6,25.7c-2.5-2.6-3.7-6.2-3.7-10.7c0-4.6,1.2-8.2,3.7-10.9c2.5-2.7,5.8-4,10-4c4.2,0,7.5,1.3,10,4
          s3.7,6.3,3.7,10.9c0,4.5-1.2,8.1-3.7,10.7c-2.5,2.6-5.8,4-10,4C155.4,29.6,152.1,28.3,149.6,25.7z M164.4,21.2
          c1.1-1.4,1.6-3.6,1.6-6.3c0-2.8-0.6-5-1.6-6.5c-1.1-1.5-2.7-2.2-4.8-2.2c-2.1,0-3.7,0.7-4.8,2.2c-1.1,1.5-1.6,3.6-1.6,6.5
          c0,2.8,0.5,4.9,1.6,6.3c1.1,1.5,2.7,2.2,4.8,2.2C161.7,23.4,163.3,22.7,164.4,21.2z"/>
        <path d="M175.8,25.7c-2.5-2.6-3.7-6.2-3.7-10.7c0-4.6,1.2-8.2,3.7-10.9c2.5-2.7,5.8-4,10-4c4.2,0,7.5,1.3,10,4
          c2.5,2.7,3.7,6.3,3.7,10.9c0,4.5-1.2,8.1-3.7,10.7c-2.5,2.6-5.8,4-10,4C181.6,29.6,178.3,28.3,175.8,25.7z M190.6,21.2
          c1.1-1.4,1.7-3.6,1.7-6.3c0-2.8-0.6-5-1.7-6.5c-1.1-1.5-2.7-2.2-4.8-2.2c-2.1,0-3.7,0.7-4.8,2.2c-1.1,1.5-1.6,3.6-1.6,6.5
          c0,2.8,0.5,4.9,1.6,6.3c1.1,1.5,2.7,2.2,4.8,2.2C187.9,23.4,189.5,22.7,190.6,21.2z"/>
        <path d="M199.9,0.8h3.3h3.4v4.2c0.3-0.5,0.6-1,0.9-1.4c1.7-2.3,4.3-3.5,7.6-3.5c2.8,0,5,0.9,6.6,2.6
          c1.6,1.8,2.4,4.2,2.4,7.3v18.9h-3.5h-3.5V11.3c0-1.7-0.4-3-1.1-3.9c-0.7-0.8-1.8-1.3-3.3-1.3c-1.9,0-3.3,0.6-4.3,1.8
          c-1,1.2-1.5,2.9-1.5,5.1v15.9h-3.5h-3.5V0.8z"/>
        <path d="M249.5,0.8h3.3h3.4v5c0.2-0.6,0.5-1.1,0.8-1.6c1.7-2.8,3.8-4.2,6.4-4.2l1.6,0v7.6c-0.6-0.1-1.3-0.1-2.1-0.1
          c-2.1,0-3.8,0.6-4.8,1.7c-1.1,1.1-1.6,2.8-1.6,5.1v14.6h-3.5h-3.5V0.8z"/>
        <g>
          <path d="M266.5,27.9c-0.8,0.8-1.8,1.2-2.9,1.2c-1.1,0-2.1-0.4-2.9-1.2c-0.8-0.8-1.2-1.8-1.2-2.9
            c0-1.1,0.4-2.1,1.2-2.9c0.8-0.8,1.8-1.2,2.9-1.2c1.1,0,2.1,0.4,2.9,1.2c0.8,0.8,1.2,1.8,1.2,2.9C267.8,26.2,267.3,27.1,266.5,27.9
            z M261.1,22.5c-0.7,0.7-1,1.5-1,2.5c0,1,0.3,1.8,1,2.5c0.7,0.7,1.5,1,2.5,1c1,0,1.8-0.3,2.5-1c0.7-0.7,1-1.5,1-2.5
            c0-1-0.3-1.8-1-2.5c-0.7-0.7-1.5-1-2.5-1C262.7,21.5,261.8,21.8,261.1,22.5z M263.5,22.7c0.6,0,1,0.1,1.2,0.2
            c0.5,0.2,0.7,0.6,0.7,1.1c0,0.4-0.1,0.7-0.4,0.9c-0.2,0.1-0.4,0.2-0.7,0.2c0.4,0.1,0.6,0.2,0.8,0.4c0.2,0.2,0.2,0.5,0.2,0.7v0.3
            c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.2l0,0.1h-0.7c0,0,0,0,0,0c0,0,0,0,0,0l0-0.1v-0.4c0-0.5-0.1-0.9-0.4-1
            c-0.2-0.1-0.5-0.1-0.9-0.1h-0.6v1.8H262v-4.5H263.5z M264.4,23.5c-0.2-0.1-0.5-0.2-1-0.2h-0.7v1.6h0.7c0.3,0,0.6,0,0.8-0.1
            c0.3-0.1,0.5-0.4,0.5-0.7C264.7,23.8,264.6,23.6,264.4,23.5z"/>
        </g>
        <path d="M31,19.5l6.9,1.2c-0.9,2.6-2.3,4.7-4.2,6c-1.9,1.4-4.3,2.1-7.1,2.1c-4.5,0-7.9-1.6-10-4.7
          c-1.7-2.5-2.6-5.6-2.6-9.4c0-4.5,1.1-8.1,3.4-10.7c2.3-2.6,5.1-3.9,8.5-3.9c3.9,0,6.9,1.3,9.1,4c2.2,2.7,3.3,6.8,3.2,12.4H21
          c0,2.1,0.6,3.8,1.7,5c1.1,1.2,2.4,1.8,4,1.8c1.1,0,2-0.3,2.7-0.9C30.1,21.9,30.7,20.9,31,19.5z M31.4,12.2c0-2.1-0.6-3.7-1.5-4.8
          c-1-1.1-2.2-1.6-3.6-1.6c-1.5,0-2.7,0.6-3.7,1.7c-1,1.2-1.5,2.7-1.4,4.7H31.4z"/>
        <path d="M241.8,19.7l6.9,1.2c-0.9,2.6-2.3,4.7-4.2,6c-1.9,1.4-4.3,2.1-7.1,2.1c-4.5,0-7.9-1.6-10-4.7
          c-1.7-2.5-2.6-5.6-2.6-9.4c0-4.5,1.1-8.1,3.4-10.7c2.2-2.6,5.1-3.9,8.5-3.9c3.9,0,6.9,1.3,9.2,4c2.2,2.7,3.3,6.8,3.2,12.4h-17.2
          c0,2.1,0.6,3.8,1.7,5c1.1,1.2,2.4,1.8,4,1.8c1.1,0,2-0.3,2.7-0.9C240.9,22.1,241.4,21.1,241.8,19.7z M242.2,12.4
          c0-2.1-0.6-3.7-1.5-4.8c-1-1.1-2.2-1.6-3.6-1.6c-1.5,0-2.7,0.6-3.7,1.7c-1,1.2-1.5,2.7-1.4,4.7H242.2z"/>
      </g>
      </svg>
      </a>
      </div>
      <div class="col-xs-9">
        <nav role="navigation">
          <div class="menu-main-navigation-container">
            <ul class="banner-nav--top-menu secondary-nav show-scrolled">
                <li><a href="<?php echo $shopUrl; ?>/apps/wishlist/" class="banner-nav--top-fav-icon"><i class="fa fa-plus"></i></a></li>
                <li><a href="<?php echo $shopUrl; ?>/collections/all"><span class="banner-nav--top-bag">
                  <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="64.1px" height="73.2px" viewBox="0 0 64.1 73.2" style="enable-background:new 0 0 64.1 73.2;"
                     xml:space="preserve" class="banner-nav--top-bag-icon">>
                  <defs>
                  </defs>
                  <rect y="23.5" class="st0" width="64.1" height="49.8"/>
                  <path class="st0" d="M50.2,18.3H46c0-7.8-6.3-14.1-14.1-14.1s-14.1,6.3-14.1,14.1h-4.2C13.6,8.2,21.8,0,31.9,0S50.2,8.2,50.2,18.3z"
                    />
                  </svg>

                  </span></a></li>
                <li><a href="<?php echo $shopUrl; ?>/collections/all" class="js-search-expand">
                  <i class="fa fa-search"></i>
                </a></li>
              </ul>

              <script id="primaryNav" type="text/template">

                {{#each items.main}}
                  {{#if @first}}
                    <li class="menu-item-has-children">
                      <a href="{{url}}">{{title}} <i class="fa fa-angle-up"></i></a>

                      <div class="sub-menu">
                        <section class="container">
                          <div class="row">

                            {{> column items=../items.one}}
                            {{> column items=../items.two}}
                            {{> column items=../items.three}}
                            {{> column items=../items.four}}
                          </div>
                        </section>
                        <hr />
                        <section class="container">
                          <div class="row text-right gift-card-menu">
                            <div class="col-sm-12">
                              {{> giftcard }}
                            </div>
                          </div>
                        </section>
                      </div>

                    </li>
                  {{else}}
                    <li>
                      <a href="{{url}}">{{title}}</a>
                    </li>
                  {{/if}}
                {{/each}}

              </script>

              <script id="primaryNavFive" type="text/template">

                {{#each items.main}}
                  {{#if @first}}
                    <li class="menu-item-has-children">
                      <a href="{{url}}">{{title}} <i class="fa fa-angle-up"></i></a>

                      <div class="sub-menu">
                        <section class="container">
                          <div class="row">

                            {{> column items=../items.one}}
                            {{> column items=../items.two}}
                            {{> column items=../items.three}}
                            {{> column items=../items.four}}
                            {{> column items=../items.five}}
                          </div>
                        </section>
                        <hr />
                        <section class="container">
                          <div class="row text-right gift-card-menu">
                            <div class="col-sm-12">
                              {{> giftcard }}
                            </div>
                          </div>
                        </section>
                      </div>

                    </li>
                  {{else}}
                    <li>
                      <a href="{{url}}">{{title}}</a>
                    </li>
                  {{/if}}
                {{/each}}

              </script>

              <script id="gift-card-partial" type="text/template">
              <p><strong>Spread a Little Aloha Joy -</strong> <em>One Size Fits All</em> <a class="btn" href="https://shop.reynspooner.com/collections/gift-cards">Gift Cards <i class="fa fa-angle-right"></i></a></p>
              </script>

              <script id="column-partial" type="text/template">

                <div class="col-md-3">


                      {{#each items}}
                        {{#if @first}}
                          <h4 class='menu-main-navigation-submenu-title'>
                            <a href='{{url}}'>{{title}} <i class='fa fa-angle-up'></i></a>
                          </h4>
                            {{#if children}}
                           <div class="menu-main-navigation--primary">
                            <ul class="menu-main-navigation--primary-nav">
                                {{#each children}}
                                  <li><a href="{{url}}">{{title}}</a>
                                  {{#if children}}
                                    <ul>
                                    {{#each children}}
                                      <li><a href="{{url}}">{{title}}</a></li>
                                    {{/each}}
                                    </ul>
                                  {{/if}}
                                  </li>
                                {{/each}}
                            {{/if}}


                        {{else}}
                          <li class="secondary-nav-item"><a href="{{url}}">{{title}}</a>
                          {{#if children}}

                              {{#each children}}
                                <li><a href="{{url}}">{{title}}</a>
                                {{#if children}}
                                  <ul>
                                  {{#each children}}
                                    <li><a href="{{url}}">{{title}}</a></li>
                                  {{/each}}
                                  </ul>
                                {{/if}}
                                </li>
                              {{/each}}

                          {{/if}}
                          </li>
                        {{/if}}

                        {{/each}}
                    </ul>
                  </div>
                </div>

              </script>

                <ul id="menu-main-navigation" class="nav"></ul>

          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<section class="product-sub-nav">
  <ul class="nav">
    <li><a href="<?php echo $shopUrl; ?>/collections/all">NEW ARRIVALS</a></li>
    <li><a href="<?php echo $shopUrl; ?>/collections/all">Men's</a></li>
    <li><a href="<?php echo $shopUrl; ?>/collections/kids-youth">Kid's</a></li>
    <li><a href="<?php echo $shopUrl; ?>/collections/all">Women &amp; Accessories</a></li>
    <li><a href="<?php echo $shopUrl; ?>/collections/on-sale">On Sale</a></li>
    <li><a href="<?php echo $shopUrl; ?>/collections/gift-cards">Gift Cards</a></li>
  </ul>
</section>

<div class="mobile-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <a class="brand" href="/"><!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
          <svg version="1.1"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
             x="0px" y="0px" width="267.8px" height="40.2px" viewBox="0 0 267.8 40.2" enable-background="new 0 0 267.8 40.2"
             xml:space="preserve" class="brand-logo">
          <defs>
          </defs>
          <g>
            <path d="M0,0.8h3.3h3.4v5C7,5.2,7.2,4.7,7.5,4.2C9.2,1.4,11.3,0,14,0l1.6,0v7.6c-0.6-0.1-1.3-0.1-2.1-0.1
              c-2.1,0-3.8,0.6-4.8,1.7c-1.1,1.1-1.6,2.8-1.6,5.1v14.6H3.5H0V0.8z"/>
            <path d="M52.9,29.5c-1.5,4.7-2.9,7.7-4,8.9c-1.1,1.2-3.1,1.8-5.9,1.8l-3.4-0.1v-6c0.2,0.1,0.6,0.1,1.4,0.1
              c1.9,0,3.1-0.4,3.7-1.2c0.4-0.5,0.7-1.6,1.1-3.2l-10-29.1h3.9h3.9l5.8,20.9h0l5.7-20.9h3.7h3.7L52.9,29.5z"/>
            <path d="M62.1,0.8h3.3h3.4v4.2c0.3-0.5,0.6-1,0.9-1.4C71.4,1.2,73.9,0,77.3,0c2.8,0,5,0.9,6.6,2.6
              c1.6,1.8,2.4,4.2,2.4,7.3v18.9h-3.5h-3.5V11.3c0-1.7-0.4-3-1.1-3.9c-0.7-0.8-1.8-1.3-3.3-1.3c-1.9,0-3.3,0.6-4.3,1.8
              c-1,1.2-1.5,2.9-1.5,5.1v15.9h-3.5h-3.5V0.8z"/>
            <path d="M112.9,9.2c0-1.1-0.4-2-1.3-2.6c-0.9-0.7-2-1-3.4-1c-1.4,0-2.4,0.2-3.2,0.7c-0.8,0.5-1.1,1.2-1.1,2.1
              c0,0.6,0.4,1.2,1.3,1.6c0.9,0.4,2.4,0.9,4.6,1.4c4.3,1,7.2,2.1,8.7,3.3c1.5,1.2,2.2,3.1,2.2,5.7c0,2.8-1.1,5-3.2,6.7
              c-2.1,1.7-4.9,2.5-8.4,2.5c-4.1,0-7.3-0.8-9.5-2.5c-2.2-1.7-3.4-4.1-3.6-7.2h7.2c0,1.3,0.6,2.3,1.6,3c1,0.7,2.5,1.1,4.2,1.1
              c1.4,0,2.5-0.3,3.3-0.8c0.8-0.5,1.2-1.2,1.2-2.1c0-0.6-0.4-1.2-1.2-1.6c-0.8-0.4-2.1-0.9-4.1-1.3c-4.5-1.1-7.5-2.2-9.1-3.4
              c-1.5-1.2-2.3-3-2.3-5.5c0-2.8,1-5,3-6.8c2-1.7,4.6-2.6,7.8-2.6c3.6,0,6.6,0.8,8.8,2.5c2.2,1.7,3.3,3.9,3.3,6.7H112.9z"/>
            <path d="M121.1,0.8h3.3h3.4v4.2l0.5-0.7c1.9-2.8,4.4-4.2,7.5-4.2c3.4,0,6.1,1.3,8.2,4c2.1,2.6,3.1,6.1,3.1,10.4
              c0,4.6-1,8.3-3.1,11c-2.1,2.8-4.8,4.2-8.2,4.2c-3.1,0-5.6-1.3-7.5-3.9l-0.1-0.2v14.4h-3.5h-3.5V0.8z M133.8,23.5
              c1.9,0,3.4-0.7,4.4-2.2c1.1-1.5,1.6-3.6,1.6-6.2c0-2.7-0.5-4.8-1.6-6.4c-1.1-1.5-2.5-2.3-4.4-2.3c-1.9,0-3.4,0.8-4.4,2.4
              c-1.1,1.6-1.6,3.8-1.6,6.5c0,2.6,0.5,4.6,1.6,6C130.4,22.8,131.9,23.5,133.8,23.5z"/>
            <path d="M149.6,25.7c-2.5-2.6-3.7-6.2-3.7-10.7c0-4.6,1.2-8.2,3.7-10.9c2.5-2.7,5.8-4,10-4c4.2,0,7.5,1.3,10,4
              s3.7,6.3,3.7,10.9c0,4.5-1.2,8.1-3.7,10.7c-2.5,2.6-5.8,4-10,4C155.4,29.6,152.1,28.3,149.6,25.7z M164.4,21.2
              c1.1-1.4,1.6-3.6,1.6-6.3c0-2.8-0.6-5-1.6-6.5c-1.1-1.5-2.7-2.2-4.8-2.2c-2.1,0-3.7,0.7-4.8,2.2c-1.1,1.5-1.6,3.6-1.6,6.5
              c0,2.8,0.5,4.9,1.6,6.3c1.1,1.5,2.7,2.2,4.8,2.2C161.7,23.4,163.3,22.7,164.4,21.2z"/>
            <path d="M175.8,25.7c-2.5-2.6-3.7-6.2-3.7-10.7c0-4.6,1.2-8.2,3.7-10.9c2.5-2.7,5.8-4,10-4c4.2,0,7.5,1.3,10,4
              c2.5,2.7,3.7,6.3,3.7,10.9c0,4.5-1.2,8.1-3.7,10.7c-2.5,2.6-5.8,4-10,4C181.6,29.6,178.3,28.3,175.8,25.7z M190.6,21.2
              c1.1-1.4,1.7-3.6,1.7-6.3c0-2.8-0.6-5-1.7-6.5c-1.1-1.5-2.7-2.2-4.8-2.2c-2.1,0-3.7,0.7-4.8,2.2c-1.1,1.5-1.6,3.6-1.6,6.5
              c0,2.8,0.5,4.9,1.6,6.3c1.1,1.5,2.7,2.2,4.8,2.2C187.9,23.4,189.5,22.7,190.6,21.2z"/>
            <path d="M199.9,0.8h3.3h3.4v4.2c0.3-0.5,0.6-1,0.9-1.4c1.7-2.3,4.3-3.5,7.6-3.5c2.8,0,5,0.9,6.6,2.6
              c1.6,1.8,2.4,4.2,2.4,7.3v18.9h-3.5h-3.5V11.3c0-1.7-0.4-3-1.1-3.9c-0.7-0.8-1.8-1.3-3.3-1.3c-1.9,0-3.3,0.6-4.3,1.8
              c-1,1.2-1.5,2.9-1.5,5.1v15.9h-3.5h-3.5V0.8z"/>
            <path d="M249.5,0.8h3.3h3.4v5c0.2-0.6,0.5-1.1,0.8-1.6c1.7-2.8,3.8-4.2,6.4-4.2l1.6,0v7.6c-0.6-0.1-1.3-0.1-2.1-0.1
              c-2.1,0-3.8,0.6-4.8,1.7c-1.1,1.1-1.6,2.8-1.6,5.1v14.6h-3.5h-3.5V0.8z"/>
            <g>
              <path d="M266.5,27.9c-0.8,0.8-1.8,1.2-2.9,1.2c-1.1,0-2.1-0.4-2.9-1.2c-0.8-0.8-1.2-1.8-1.2-2.9
                c0-1.1,0.4-2.1,1.2-2.9c0.8-0.8,1.8-1.2,2.9-1.2c1.1,0,2.1,0.4,2.9,1.2c0.8,0.8,1.2,1.8,1.2,2.9C267.8,26.2,267.3,27.1,266.5,27.9
                z M261.1,22.5c-0.7,0.7-1,1.5-1,2.5c0,1,0.3,1.8,1,2.5c0.7,0.7,1.5,1,2.5,1c1,0,1.8-0.3,2.5-1c0.7-0.7,1-1.5,1-2.5
                c0-1-0.3-1.8-1-2.5c-0.7-0.7-1.5-1-2.5-1C262.7,21.5,261.8,21.8,261.1,22.5z M263.5,22.7c0.6,0,1,0.1,1.2,0.2
                c0.5,0.2,0.7,0.6,0.7,1.1c0,0.4-0.1,0.7-0.4,0.9c-0.2,0.1-0.4,0.2-0.7,0.2c0.4,0.1,0.6,0.2,0.8,0.4c0.2,0.2,0.2,0.5,0.2,0.7v0.3
                c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.2l0,0.1h-0.7c0,0,0,0,0,0c0,0,0,0,0,0l0-0.1v-0.4c0-0.5-0.1-0.9-0.4-1
                c-0.2-0.1-0.5-0.1-0.9-0.1h-0.6v1.8H262v-4.5H263.5z M264.4,23.5c-0.2-0.1-0.5-0.2-1-0.2h-0.7v1.6h0.7c0.3,0,0.6,0,0.8-0.1
                c0.3-0.1,0.5-0.4,0.5-0.7C264.7,23.8,264.6,23.6,264.4,23.5z"/>
            </g>
            <path d="M31,19.5l6.9,1.2c-0.9,2.6-2.3,4.7-4.2,6c-1.9,1.4-4.3,2.1-7.1,2.1c-4.5,0-7.9-1.6-10-4.7
              c-1.7-2.5-2.6-5.6-2.6-9.4c0-4.5,1.1-8.1,3.4-10.7c2.3-2.6,5.1-3.9,8.5-3.9c3.9,0,6.9,1.3,9.1,4c2.2,2.7,3.3,6.8,3.2,12.4H21
              c0,2.1,0.6,3.8,1.7,5c1.1,1.2,2.4,1.8,4,1.8c1.1,0,2-0.3,2.7-0.9C30.1,21.9,30.7,20.9,31,19.5z M31.4,12.2c0-2.1-0.6-3.7-1.5-4.8
              c-1-1.1-2.2-1.6-3.6-1.6c-1.5,0-2.7,0.6-3.7,1.7c-1,1.2-1.5,2.7-1.4,4.7H31.4z"/>
            <path d="M241.8,19.7l6.9,1.2c-0.9,2.6-2.3,4.7-4.2,6c-1.9,1.4-4.3,2.1-7.1,2.1c-4.5,0-7.9-1.6-10-4.7
              c-1.7-2.5-2.6-5.6-2.6-9.4c0-4.5,1.1-8.1,3.4-10.7c2.2-2.6,5.1-3.9,8.5-3.9c3.9,0,6.9,1.3,9.2,4c2.2,2.7,3.3,6.8,3.2,12.4h-17.2
              c0,2.1,0.6,3.8,1.7,5c1.1,1.2,2.4,1.8,4,1.8c1.1,0,2-0.3,2.7-0.9C240.9,22.1,241.4,21.1,241.8,19.7z M242.2,12.4
              c0-2.1-0.6-3.7-1.5-4.8c-1-1.1-2.2-1.6-3.6-1.6c-1.5,0-2.7,0.6-3.7,1.7c-1,1.2-1.5,2.7-1.4,4.7H242.2z"/>
          </g>
          </svg>
        </a>
      </div>
      <div class="col-xs-6">
        <ul class="banner-nav--top-menu secondary-nav">
        <li>
          <a href="<?php echo $shopUrl; ?>/account">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 169.4 195.5" style="enable-background:new 0 0 169.4 195.5;" xml:space="preserve" class="banner-nav--top-bag-icon">
            <path class="st0" d="M159.9,195.5H9.5c-5.2,0-9.5-4.3-9.5-9.5c0-46.7,38-84.7,84.7-84.7s84.7,38,84.7,84.7
              C169.4,191.3,165.2,195.5,159.9,195.5z M19.7,176.5h130c-4.6-31.7-32-56.2-65-56.2S24.3,144.8,19.7,176.5z"/>
            <path class="st0" d="M84.7,117.7c-29.7,0-53.9-24.2-53.9-53.9S55,9.8,84.7,9.8s53.9,24.2,53.9,53.9S114.5,117.7,84.7,117.7z
               M84.7,28.8c-19.3,0-34.9,15.7-34.9,34.9s15.7,34.9,34.9,34.9s34.9-15.7,34.9-34.9S104,28.8,84.7,28.8z"/>
            </svg>
          </a>
        </li>
        <li><a href="<?php echo $shopUrl; ?>/collections/all">
              <i class="fa fa-plus"></i>
            </a></li>
            <li><a href="<?php echo $shopUrl; ?>/cart"><span class="banner-nav--top-bag">
              <svg version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                 x="0px" y="0px" width="64.1px" height="73.2px" viewBox="0 0 64.1 73.2" style="enable-background:new 0 0 64.1 73.2;"
                 xml:space="preserve" class="banner-nav--top-bag-icon">
              <defs>
              </defs>
              <rect y="23.5" class="st0" width="64.1" height="49.8"/>
              <path class="st0" d="M50.2,18.3H46c0-7.8-6.3-14.1-14.1-14.1s-14.1,6.3-14.1,14.1h-4.2C13.6,8.2,21.8,0,31.9,0S50.2,8.2,50.2,18.3z"
                />
              </svg>
              </span></a></li>
              <li><a href="#" class="js-menu-expand mobile-nav-trigger"></a></li>
          </ul>
      </div>
    </div>
  </div>
  <div class="mobile-navigation">
    <div class="mobile-search">
      <form class="search-form form-inline" action="https://shop.reynspooner.com/search">
          <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i></button>
          <input type="search" name="q" class="search-field form-control" placeholder="Search print, product, color, etc ..." maxlength="30" />
      </form>
    </div>
    <ul id="menu-mobile-navigation" class="nav">

          <li class="secondary-nav-item"><a href="/blog/">Blog</a></li>
          <li class="secondary-nav-item"><a href="<?php echo $shopUrl; ?>/apps/store-locator">Find a Store</a></li>
          <li class="menu-mobile-navigation-icons">
            <a href="https://www.facebook.com/reynspooner" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.pinterest.com/reynspooner/" target="_blank"><i class="fa fa-pinterest"></i></a>
            <a href="http://twitter.com/reynspooner" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://instagram.com/reynspooner" target="_blank"><i class="fa fa-instagram"></i></a>
          </li>
          <li class="back-to-top"><a href="#" class="js-scroll-top">Back to Top <i class="fa fa-angle-down"></i></a></li>
    </ul>
  </div>
</div>