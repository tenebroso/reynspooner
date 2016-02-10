<?php use Roots\Sage\Titles; ?>
<div class="page-header text-center">
<?php if ( function_exists( 'yoast_breadcrumb' ) ) { ?>
	<div class="breadcrumb text-left">
		<?php yoast_breadcrumb(); ?>
	</div>
<?php } ?>

  <h1><?= Titles\title(); ?></h1>
  <?php if(is_page('community')): ?>
	<a href="/blog" class="community-blog--cta">Read Our <svg class="blog-script" version="1.1"
			 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
			 x="0px" y="0px" width="228.3px" height="140.5px" viewBox="0 0 228.3 140.5" enable-background="new 0 0 228.3 140.5"
			 xml:space="preserve">
		<defs>
		</defs>
		<g>
			<g>
				<path d="M1,107.3c0-3.6,11.3-28.7,24.5-52.4c10.1-18.2,16.2-28.5,17.8-29.8c0.6-0.4,1.6-0.8,2.5-1.1c1.2-0.3,2-0.4,2-0.4
					c8.8-5.6,16.7-9.4,23.4-11c5.5-1.4,9,1.1,12.5,6.8c3.2,4.9,4.1,8.4,4.1,10.4c0,8.2-12,21.7-27.7,30c10.4,0.1,14.8,6.2,14.8,13.7
					c0,21.5-44.1,42.6-57.7,46c-5.5,1.4-7.3-0.7-8.4-4.2C5.2,113.9,1,110.6,1,107.3z M14.5,104c0.1,1.2,1.7,0.9,3.3,0.5
					c26.4-6.5,43.8-24.2,43.8-32.5c0-3.9-2.3-6.5-12.3-4c-8.1,2-17.8,6.8-22.3,9.3C21,88.7,16.1,99.1,14.5,104z M35.8,60.4
					c1.2,0.3,2.6,0.1,4.4-0.3C52.8,57,74,37.6,74,30.3c0-1.8-1.7-2.7-6.1-1.6c-7,1.7-18.1,8.7-20.3,10.3L35.8,60.4z"/>
				<path d="M14.1,120.9c-3.8,0-5.3-2.4-6.2-4.9c-3.3-1.4-7.9-4.8-7.9-8.7c0-4.2,12.4-30.9,24.6-52.9c13.9-24.9,16.9-29.2,18.1-30.1
					c0.8-0.6,2-1,2.9-1.3c0.9-0.2,1.6-0.3,1.9-0.4c8.9-5.7,16.8-9.4,23.5-11c1.1-0.3,2.1-0.4,3.1-0.4c4.1,0,7.3,2.3,10.5,7.6
					c3.7,5.6,4.2,9.2,4.2,10.9c0,8.3-10.9,20.8-25.3,29.3c7.9,1.2,12.4,6.4,12.4,14.4c0,22.4-44.9,43.6-58.5,47
					C16.1,120.7,15.1,120.9,14.1,120.9z M74,13.2c-0.8,0-1.7,0.1-2.6,0.3c-6.5,1.6-14.2,5.3-23.1,10.9c-0.1,0.1-0.3,0.1-0.5,0.2
					c0,0-0.8,0.1-1.9,0.3c-0.8,0.2-1.7,0.6-2.1,0.9c-2,1.6-13.7,22.6-17.6,29.5C12.9,79.6,2,104.1,2,107.3c0,2.6,3.7,5.7,7.1,7
					c0.3,0.1,0.5,0.3,0.6,0.6c1,2.9,2.1,3.9,4.5,3.9c0.8,0,1.7-0.1,2.8-0.4c14.6-3.6,57-24.8,57-45c0-8-5-12.6-13.8-12.7
					c-0.5,0-0.9-0.3-1-0.8s0.1-0.9,0.5-1.1c15-8,27.2-21.1,27.2-29.2c0-1.2-0.4-4.4-3.9-9.8C80,15.2,77.3,13.2,74,13.2z M15.8,105.8
					L15.8,105.8c-1.9,0-2.2-1.3-2.3-1.7c0-0.1,0-0.3,0-0.4c1.5-4.6,6.1-14.3,12.5-26.9c0.1-0.2,0.2-0.3,0.4-0.4
					c2.1-1.2,13.1-7,22.6-9.4c2.7-0.7,5-1,6.8-1c4.5,0,6.7,2,6.7,5.9c0,8.9-17.8,26.9-44.6,33.5C17.4,105.6,16.5,105.8,15.8,105.8z
					 M15.6,103.8c0.1,0,0.1,0,0.2,0c0.5,0,1.3-0.2,1.8-0.3c26.7-6.6,43.1-24.2,43-31.6c0-2.1-0.6-3.9-4.7-3.9c-1.7,0-3.8,0.3-6.4,1
					c-8.9,2.2-19.2,7.6-21.8,9C21.6,89.9,17.2,99.2,15.6,103.8z M37,61.6L37,61.6c-0.5,0-1-0.1-1.5-0.2c-0.3-0.1-0.5-0.3-0.7-0.6
					c-0.1-0.3-0.1-0.6,0-0.9l11.7-21.5c0.1-0.1,0.2-0.2,0.3-0.3c2.2-1.6,13.5-8.7,20.7-10.4c1.3-0.3,2.5-0.5,3.4-0.5
					c3.6,0,3.9,2.4,3.9,3.1c0,8.1-22,27.6-34.6,30.7C39,61.4,37.9,61.6,37,61.6z M48.3,39.6L37.4,59.5c0.7,0,1.4-0.2,2.5-0.4
					c5.6-1.4,13.7-6.4,21.2-13.1C68.2,39.7,73,33.4,73,30.3c0-0.3,0-1.1-1.9-1.1c-0.8,0-1.8,0.1-3,0.4C61.8,31.2,51.2,37.6,48.3,39.6z
					"/>
			</g>
			<g>
				<path d="M95.9,89.3c3.8-0.9,10.3-4.8,19.6-17.9c6.4-8.9,7.7-12.2,10-12.8c1.7-0.4,2.8,1.3,2.8,4.1c0,2.8-18,33.2-34.5,37.3
					c-6.7,1.7-12.6-5.4-12.6-16c0-15.5,11-37.3,20.7-54.6c8.8-15.6,15.9-26.7,22.2-28.2c4.1-1,9,2.6,9,11.1
					c0,14.5-22.8,50.3-42.2,71.8C91.4,89.2,93.7,89.9,95.9,89.3z M123.9,13.9c0-0.7-0.1-1-0.4-0.9c-3.2,0.8-26,39-31.6,59.9
					C107.9,53.6,123.9,21.7,123.9,13.9z"/>
				<path d="M91.8,101.3c-6.7,0-11.7-7.4-11.7-17.2c0-15.8,11.1-37.8,20.8-55.1c9.6-17,16.4-27.1,22.8-28.7c4.6-1.1,10.2,2.5,10.2,12
					c0,14.6-22.2,50-42.1,72.1c0.6,4.1,2.3,4.1,2.8,4.1c0,0,0,0,0,0c0.3,0,0.6,0,1-0.1c3-0.7,9.4-4,19-17.5c2-2.8,3.5-5.1,4.7-6.9
					c2.7-4,3.9-5.8,5.8-6.3c0.3-0.1,0.5-0.1,0.8-0.1c1.6,0,3.2,1.4,3.2,5.2c0,3.2-18.5,34.1-35.3,38.2
					C93.2,101.2,92.5,101.3,91.8,101.3z M125.4,2c-0.4,0-0.8,0-1.1,0.1c-5.7,1.4-12.5,11.7-21.6,27.7C93.1,47,82.1,68.7,82.1,84
					c0,8.7,4.2,15.2,9.7,15.2c0.6,0,1.1-0.1,1.7-0.2c16.1-4,33.6-34.1,33.8-36.3c0-1.9-0.5-3.2-1.2-3.2c-0.1,0-0.2,0-0.3,0
					c-1.2,0.3-2.3,1.9-4.7,5.5c-1.2,1.8-2.7,4.1-4.8,6.9c-9.4,13.3-16.2,17.3-20.2,18.2c-0.5,0.1-1,0.2-1.4,0.2c0,0,0,0,0,0
					c-1.9,0-4.3-1.1-4.9-6.4c0-0.3,0.1-0.6,0.3-0.8C109.5,62,132,26.2,132,12.2C132,5.2,128.6,2,125.4,2z M91.8,73.8
					c-0.2,0-0.3,0-0.5-0.1c-0.4-0.2-0.6-0.7-0.5-1.1C96.2,52.8,119,13,123.2,12c0.1,0,0.2,0,0.3,0c0.5,0,1.3,0.3,1.3,2
					c0,7.9-15.6,39.7-32.3,59.6C92.4,73.7,92.1,73.8,91.8,73.8z M122.8,14.7c-4.6,5.1-21.6,33.3-28.5,53.4
					C108.7,49.4,121.9,22.8,122.8,14.7z"/>
			</g>
			<g>
				<path d="M170,47.6c12.9-3.2,15.7-11.7,17.3-12.1c1.2-0.3,3,1.8,3,3.4c0,3.1-8.7,13.7-20.3,16.5c-1.7,0.4-3.8,0.8-6,1
					c-6.8,15.3-18,30.5-30.5,33.6c-9.3,2.3-14.8-6-14.8-15.8c0-16.9,14.8-36.9,27.3-50.1c0.9-0.8,1.6-1.4,2.5-1.7
					c0.3-0.1,1-0.1,1.3-0.2c3-2.7,5.7-4.8,8.6-5.6c1.9-0.5,3.6-0.5,6.7,1.9c4.5,1.6,6.2,4.1,6.2,10.6c0,4.9-1.4,11.7-3.9,18.9
					L170,47.6z M146.4,43.2c0-1.2,0.1-2.9,0.4-4.4c-8.3,10.3-16.2,25.7-16.2,32.7c0,3.4,2.2,5.6,6,4.7c6.1-1.5,12.8-10.8,17.4-20.6
					C149.6,53.9,146.4,50.2,146.4,43.2z M160.9,32.4c0-2.8-0.9-3.8-1.7-3.6c-2.3,0.6-3.6,5.2-3.6,12.4c0,2.2,0.7,4.2,2.2,5.3
					C159.7,40.9,160.9,35.8,160.9,32.4z"/>
				<path d="M130.6,91.5c-7.4,0-12.8-7.2-12.8-17.1c0-8,3.6-25.3,27.5-50.8c1-0.9,1.9-1.7,3-1.9c0.2,0,0.5-0.1,0.8-0.1
					c0.1,0,0.2,0,0.3,0c3-2.6,5.7-4.8,8.8-5.6c0.7-0.2,1.4-0.3,2-0.3c1.7,0,3.4,0.7,5.4,2.3c4.9,1.8,6.8,4.9,6.8,11.4
					c0,4.6-1.2,10.7-3.4,17.5l0.8-0.2c9.2-2.3,13-7.3,15.1-10c0.9-1.2,1.4-1.9,2.2-2.1c0.2,0,0.3-0.1,0.5-0.1c1.7,0,3.8,2.4,3.8,4.5
					c0,3.7-8.9,14.5-21.1,17.5c-1.6,0.4-3.5,0.7-5.5,1c-8.3,18.3-19.8,30.9-30.9,33.6C132.8,91.4,131.7,91.5,130.6,91.5z M160.1,17.6
					c-0.4,0-0.9,0.1-1.5,0.2c-2.7,0.7-5.3,2.8-8.1,5.3c-0.1,0.1-0.3,0.2-0.4,0.2c-0.2,0-0.5,0.1-0.8,0.1c-0.2,0-0.4,0-0.5,0.1
					c-0.6,0.2-1.3,0.7-2,1.4c-8.1,8.6-26.9,30.7-26.9,49.4c0,10.4,5.6,15.2,10.8,15.2c0.9,0,1.8-0.1,2.8-0.4c10.6-2.6,21.8-15,29.8-33
					c0.1-0.3,0.5-0.5,0.8-0.6c2.1-0.2,4.1-0.6,5.8-1c11.2-2.8,19.5-13.1,19.5-15.6c0-1.1-1.3-2.5-1.8-2.5c-0.1,0.1-0.6,0.8-1.1,1.3
					c-2,2.7-6.3,8.3-16.2,10.7l-2.6,0.6c-0.4,0.1-0.7,0-1-0.3c-0.2-0.3-0.3-0.7-0.2-1c2.5-7.3,3.9-13.9,3.9-18.6
					c0-6.5-1.9-8.3-5.6-9.6c-0.1,0-0.2-0.1-0.3-0.2C162.2,17.8,161,17.6,160.1,17.6z M134.9,77.3L134.9,77.3c-3.2,0-5.3-2.3-5.3-5.9
					c0-7.7,8.5-23.5,16.5-33.4c0.3-0.4,0.8-0.5,1.2-0.3c0.4,0.2,0.6,0.6,0.6,1.1c-0.3,1.4-0.4,3-0.4,4.3c0,5.9,2.3,9.7,6.9,11.4
					c0.3,0.1,0.5,0.3,0.6,0.6s0.1,0.6,0,0.8c-2.1,4.4-9.6,19.1-18.1,21.2C136.1,77.2,135.5,77.3,134.9,77.3z M145.4,42.2
					c-7.6,10.3-13.8,23.3-13.8,29.3c0,1.2,0.3,3.9,3.3,3.9h0c0.4,0,0.9-0.1,1.4-0.2c4.9-1.2,11.1-8.5,16.3-19.1
					c-3.5-1.6-7.2-5.1-7.2-12.8C145.4,42.9,145.4,42.5,145.4,42.2z M157.7,47.5c-0.2,0-0.4-0.1-0.6-0.2c-1.7-1.3-2.6-3.5-2.6-6.1
					c0-5.6,0.8-12.5,4.4-13.4c0.2,0,0.3-0.1,0.5-0.1c0.8,0,2.5,0.5,2.5,4.6c0,3.5-1.2,8.7-3.2,14.4c-0.1,0.3-0.4,0.5-0.7,0.6
					C157.9,47.5,157.8,47.5,157.7,47.5z M159.3,29.8c-1.4,0.4-2.8,4.1-2.8,11.4c0,1.3,0.3,2.5,0.8,3.4c1.6-4.8,2.6-9.2,2.6-12.2
					C159.9,30.4,159.4,29.9,159.3,29.8z"/>
			</g>
			<g>
				<path d="M158.9,139.2c-6.5,1.6-10.7-2.7-10.7-12.1c0-20,24.1-39.8,45.4-51.3c3.3-6.1,6.4-11.7,9.3-16.8
					c-12.6,14.3-16.1,18-20.9,19.2c-6.2,1.5-12.5-3.2-12.5-10.8c0-21.5,32-51,43.4-53.8c5.1-1.3,10,0.5,10.3,9.6
					c3.2,4.3,4.2,6.6,4.2,8.8c0,0.7-1,2.8-5.2,9.7c-4.8,7.8-7.4,11.9-12,20.3c-1.6,2.8-3,5.4-4.3,8c3.6-1.5,7-2.6,9.9-3.3
					c2.8-0.7,3.3,0.4,3.3,1.6c0,2.1-1.6,4.4-11.6,9.3c-2.8,1.3-5.4,2.7-7.8,4C178.2,121.2,171.2,136.1,158.9,139.2z M156,125.1
					c0,1.8,1.2,2.9,2.9,2.4c5.8-1.4,16.2-18.8,26.7-37.4C166.4,103.4,156,116.9,156,125.1z M213,29.8c0-2.7-1.3-3.7-2.9-3.3
					c-8.4,2.1-29.7,26.5-29.7,35.9c0,1.9,1.2,3,4.2,2.2c8-2,25.2-22.7,28.1-32.4C212.7,32.3,213,31,213,29.8z"/>
				<path d="M156.4,140.5c-5.8,0-9.2-5-9.2-13.5c0-20,23.5-40,45.7-52.1c1-1.7,1.9-3.5,2.8-5.1c0.6-1.1,1.2-2.3,1.8-3.4
					c-7.9,8.8-11.1,11.6-15.3,12.6c-0.9,0.2-1.7,0.3-2.6,0.3c-6.2,0-11.1-5.3-11.1-12.1c0-22,32.4-51.9,44.1-54.8c1-0.3,2.1-0.4,3-0.4
					c3,0,8.1,1.4,8.5,10.6c3.1,4.2,4.2,6.6,4.2,9.2c0,1-0.8,2.7-5.4,10.2l-1.7,2.8C217.5,51,215,55,211,62.4c-1,1.7-2,3.6-3.1,5.6
					c2.7-1,5.2-1.8,7.5-2.4c0.7-0.2,1.2-0.2,1.8-0.2c1.8,0,2.8,1,2.8,2.8c0,2.7-2,5.3-12.2,10.2c-2.8,1.3-5.3,2.7-7.5,3.9
					c-1.7,3.2-3.4,6.3-4.9,9.2c-17.8,33.4-24.5,45.9-36.2,48.8C158.2,140.4,157.2,140.5,156.4,140.5z M202.8,57.9
					c0.2,0,0.4,0.1,0.6,0.2c0.4,0.3,0.5,0.9,0.3,1.3c-2,3.5-4.1,7.3-6.3,11.4c-1,1.8-1.9,3.6-3,5.4c-0.1,0.2-0.2,0.3-0.4,0.4
					c-21.7,11.8-44.9,31.2-44.9,50.4c0,7.3,2.6,11.5,7.2,11.5c0.7,0,1.5-0.1,2.3-0.3c10.9-2.7,17.4-15,34.9-47.8c1.6-3,3.3-6.1,5-9.5
					c0.1-0.2,0.2-0.3,0.4-0.4c2.3-1.2,5-2.7,7.9-4.1c9.7-4.7,11-6.9,11-8.4c0-0.6-0.1-0.8-0.8-0.8c-0.3,0-0.8,0.1-1.3,0.2
					c-2.9,0.7-6.2,1.8-9.7,3.3c-0.4,0.2-0.8,0.1-1.1-0.2c-0.3-0.3-0.3-0.8-0.2-1.1c1.4-2.8,3-5.6,4.4-8c4.1-7.4,6.6-11.5,10.3-17.6
					l1.7-2.8c1.4-2.2,5-8.2,5.1-9.1c0-1.7-0.7-3.7-4-8.2c-0.1-0.2-0.2-0.4-0.2-0.6c-0.2-5.9-2.4-8.9-6.5-8.9c-0.8,0-1.6,0.1-2.5,0.3
					c-11,2.7-42.6,32.1-42.6,52.8c0,5.8,3.9,10.1,9.1,10.1c0.7,0,1.4-0.1,2.1-0.3c4.4-1.1,7.5-4.3,20.4-18.9
					C202.3,58,202.6,57.9,202.8,57.9z M158.2,128.6L158.2,128.6c-1.9,0-3.2-1.4-3.2-3.5c0-9.1,11.8-23.2,30-35.8
					c0.4-0.3,0.9-0.2,1.2,0.1s0.4,0.8,0.2,1.2c-12.2,21.7-21.5,36.5-27.3,37.9C158.8,128.6,158.5,128.6,158.2,128.6z M182.5,93.5
					c-15.6,11.5-25.5,23.7-25.5,31.6c0,0.6,0.2,1.5,1.2,1.5h0c0.2,0,0.3,0,0.5-0.1C164.2,125.2,175.6,105.8,182.5,93.5z M182.8,65.9
					L182.8,65.9c-2.2,0-3.5-1.3-3.5-3.5c0-10.1,21.6-34.7,30.5-36.9c0.3-0.1,0.6-0.1,0.9-0.1c1.6,0,3.3,1.2,3.3,4.4
					c0,1.3-0.3,2.6-0.3,2.7c-3,10-20.4,31-28.9,33.1C184.1,65.8,183.4,65.9,182.8,65.9z M210.7,27.4c-0.1,0-0.3,0-0.4,0.1
					c-7.9,2-29,25.9-29,35c0,1.1,0.4,1.5,1.5,1.5l0,0c0.4,0,0.9-0.1,1.5-0.2C191,62,208.5,42.8,211.7,32l0,0c0,0,0.2-1.1,0.2-2.2
					C212,29.1,211.9,27.4,210.7,27.4z"/>
			</g>
		</g>
		</svg> <i class="fa fa-angle-right"></i></a>
<?php endif; ?>
</div>
