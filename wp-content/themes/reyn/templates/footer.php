<?php global $blogUrl; ?>
<footer class="content-info" role="contentinfo">
	<nav role="navigation" class="secondary-nav--container">
		<div class="container">
			<div class="menu-footer-navigation-container">
				<ul id="menu-footer-navigation" class="secondary-nav">
					<li><a href="<?php echo $blogUrl; ?>/contact-us/">Contact Us</a></li>
					<li><a href="<?php echo $blogUrl; ?>/fit-guide/">Fit Guide</a></li>
					<li><a href="<?php echo $blogUrl; ?>/group-sales-and-custom-orders/">Group Sales & Custom Orders</a></li>
					<li><a href="<?php echo $blogUrl; ?>/affiliates/">Affiliates</a></li>
					<li><a href="<?php echo $blogUrl; ?>/shipping-returns/">Shipping &#038; Returns</a></li>
					<li><a href="<?php echo $blogUrl; ?>/category/press-releases/">Press</a></li>
					<li><a href="<?php echo $blogUrl; ?>/privacy-policy/">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="footer-signup">
		<div class="container">
			<div class="ctct-embed-signup">
					<form id="email_signup" class="Form inline-block"  action="//manage.kmail-lists.com/subscriptions/subscribe" data-ajax-submit="//manage.kmail-lists.com/ajax/subscriptions/subscribe" method="GET" target="_blank" novalidate="novalidate">

					  <h5 class="footer-signup--instruction inline-block">GET THE LATEST NEWS AND SPECIAL OFFERS, JOIN OUR INSIDER’S LIST:</h5>
                                                <input type="hidden" name="g" value="mK5TrB">
						<input class="footer-signup--input" type="email" name="email" placeholder="Enter your email here..." value="" maxlength="80" required>
						<button type="submit" class="footer-signup--button Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up <i class="fa fa-angle-right"></i></button>
                                                <div class="klaviyo_messages">
                                                  <div class="success_message" style="display:none;"></div>
                                                  <div class="error_message" style="display:none;"></div>
                                                </div>
					</form>
                                        <script type="text/javascript" src="//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"></script>
                                        <script type="text/javascript">
                                          KlaviyoSubscribe.attachToForms('#email_signup', {
                                            success_url: 'https://www.reynspooner.com/insider-thank-you/'
                                          });
                                        </script>
			</div>
		</div>
	</section>
</footer>
