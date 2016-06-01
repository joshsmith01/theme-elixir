<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">

	<?php get_template_part( 'template-parts/part-main-navigation' ); ?>


	<div class="row header-content tagline">
		<div class="small-12 columns small-centered title-content">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<hr class="small-12 medium-2">
		</div>
		<div class="small-11 columns small-centered stinger">
			<h3 class="impact-header">There Is No Limit To What You Can Accomplish
				Using “Elixir Product”</h3>
		</div>
		<div class="small-12 columns small-centered">
			<a href="#" role="button" class="hollow button small-10 medium-2">Get Started</a>
		</div>
		<div class="small-12 columns small-centered title-content-hanger">
			<p>Have Something To Say?</p>
			<hr class="small-12 medium-2">
		</div>
	</div>
</header>


<?php get_template_part( 'template-parts/part-performance' ); ?>
<?php get_template_part( 'template-parts/part-product-demo' ); ?>
<?php get_template_part( 'template-parts/part-recent-projects' ); ?>
<?php get_template_part( 'template-parts/part-work-together' ); ?>
<?php get_template_part( 'template-parts/part-how-we-work' ); ?>
<?php get_template_part( 'template-parts/part-testimonials' ); ?>
<?php get_template_part( 'template-parts/part-suggestions' ); ?>
<?php get_template_part( 'template-parts/part-wide-grid' ); ?>

<?php get_footer();
