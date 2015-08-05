<footer class="content-info" role="contentinfo">
	<nav role="navigation" class="secondary-nav--container">
		<div class="container">
			<?php
			if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'secondary-nav']);
			endif;
			?>
		</div>
	</nav>
	<section class="footer-signup">
		<div class="container">
			<!--Begin CTCT Sign-Up Form-->
			<div class="ctct-embed-signup">
					<span id="success_message" style="display:none;">
						<div style="text-align:center;">Thanks for signing up!</div>
					</span>
					<h5 class="footer-signup--instruction inline-block">be a part of our exclusive mailing list:</h5>
					<form data-id="embedded_signup:form" class="ctct-custom-form Form inline-block" name="embedded_signup" method="POST" action="//visitor2.constantcontact.com/api/signup">
						<input data-id="ca:input" type="hidden" name="ca" value="8aab1659-6063-4746-a194-95bd0ccf17be">
						<input data-id="source:input" type="hidden" name="source" value="EFD">
						<input data-id="required:input" type="hidden" name="required" value="list,email">
						<input data-id="url:input" type="hidden" name="url" value="">
						<input class="footer-signup--input" data-id="Email Address:input" type="text" name="email" placeholder="Enter your email here..." value="" maxlength="80">
						<input class="hidden" data-id="First Name:input" type="text" name="first_name" value="" maxlength="50">
						<input class="hidden" data-id="Lists:input" type="checkbox" name="list_0" value="8" checked>
						<input class="hidden" data-id="Lists:input" type="checkbox" name="list_1" value="1" checked>

						<button type="submit" class="footer-signup--button Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up <span>&gt;</span></button>
					</form>
			</div>
			<script type='text/javascript'>
			var localizedErrMap = {};
			localizedErrMap['required'] = 		'This field is required.';
			localizedErrMap['ca'] = 			'An unexpected error occurred while attempting to send email.';
			localizedErrMap['email'] = 			'Please enter your email address in name@email.com format.';
			localizedErrMap['birthday'] = 		'Please enter birthday in MM/DD format.';
			localizedErrMap['anniversary'] = 	'Please enter anniversary in MM/DD/YYYY format.';
			localizedErrMap['custom_date'] = 	'Please enter this date in MM/DD/YYYY format.';
			localizedErrMap['list'] = 			'Please select at least one email list.';
			localizedErrMap['generic'] = 		'This field is invalid.';
			localizedErrMap['shared'] = 		'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
			localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
			localizedErrMap['state_province'] = 'Select a state/province';
			localizedErrMap['selectcountry'] = 	'Select a country';
			var postURL = 'https://visitor2.constantcontact.com/api/signup';
			</script>
			<script type='text/javascript' src='//static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
		</div>
	</section>
  <div class="footer-story">
	<a href="#" class="footer-story--cta cta-box--floral text-center background-cover">
      <div class="cta-box--content">
        <h4>Our Legacy</h4>
        <hr />
        <p>The story of Reyn Spooner begins in the 1940's when he opened his first store.</p>
        <span class="btn btn-block btn-default" href="#">Learn More About Reyn <span>&gt;</span></span>
      </div>
    </a>
  </div>

  <div class="container">
	<p class="copyright text-uppercase">Hawaiian Traditionals Since 1956 &copy; <?php date('Y'); ?> Reyn Spooner.</p>
  </div>
</footer>
