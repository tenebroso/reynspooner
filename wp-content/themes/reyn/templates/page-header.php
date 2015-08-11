<?php use Roots\Sage\Titles; ?>
<div class="page-header text-center">
<?php if ( function_exists( 'yoast_breadcrumb' ) ) { ?>
	<div class="breadcrumbs text-left">
		<?php yoast_breadcrumb(); ?>
	</div>
<?php } ?>
  <h1><?= Titles\title(); ?></h1>
</div>
