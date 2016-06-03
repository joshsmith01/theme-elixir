<?php
/*
Template Name: Full Width - About Us
*/
get_header(); ?>


<div id="page-full-width"  role="main">


	<section class="about-us">

    <?php get_template_part( 'template-parts/part-main-navigation' ); ?>

		<div class="row">
			<div class="small-12 columns text-center about-us-header">
				<h2 class="page-hook-title ">Unique Layouts, <span class="main-blue">Customize wireframes</span> & User
					Interface Kit</h2>
				<button type="button" class="button">Take a Tour</button>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/part-quick-view' ); ?>
	<?php get_template_part( 'template-parts/part-our-team' ); ?>
	<?php get_template_part( 'template-parts/part-our-services' ); ?>
	<?php get_template_part( 'template-parts/part-subfooter' ); ?>
    
    
    
    

</div>


<?php get_footer();
