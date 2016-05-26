<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="row">
		<div class="small-12 columns small-centered">
	<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
		<div class="top-bar-left">
			<ul class="menu">
				<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				                    rel="home"><?php bloginfo( 'name' ); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<?php foundationpress_top_bar_r(); ?>

			<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
			<?php endif; ?>
		</div>
	</nav>
		</div>
	</div>
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
<?php get_template_part( 'template-parts/recent-projects' ); ?>
<?php get_template_part( 'template-parts/work-together' ); ?>
<?php get_template_part( 'template-parts/how-we-work' ); ?>

<?php get_footer();
