<?php get_header(); ?>
	
	
	<!-- MAIN CONTENT SECTION  _____________________________________________-->
	<section id="content" role="main">

		<div class="featured-image-header">
			<div id="">
				<img src="https://placeholdit.imgix.net/~text?txtsize=135&txt=1800%C3%971200&w=1800&h=1200" alt="" />
			</div>
		</div>

		<div class="wrapper">
			<!-- WYSIWYG starts here __-->
			<div class="column-grid column-grid-3">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
			</div>
			<!-- WYSIWYG ends here __-->
		</div><!-- END .wrapper -->
		
	</section>


<?php get_footer(); ?>