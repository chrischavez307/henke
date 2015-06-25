<?php 
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>	
	<!-- MAIN CONTENT SECTION  _____________________________________________-->
	<section id="content" role="main">
		<div class="wrapper">
	
			<h2><?php the_title(); ?></h2>

			<nav id="gallery-filter">
				<ul>
                	<li><a href="javascript:void(0)" data-filter="*" class="active">All</a></li>
					<?php $gallery_categories = get_terms('gallery-category'); foreach ($gallery_categories as $gallery_category){ echo '<li><a href="javascript:void(0)" data-filter=".' .$gallery_category->slug.'">'. $gallery_category->name .'</a></li>'; } ?>
				</ul>
			</nav>

			<nav id="grid-changer">
				<ul>
					<li class="col-3"><a href="javascript:void(0)" class="active">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
							<rect width="10" height="10" x="8"   y="8" />
						</svg>
					</a></li>
					<li class="col-5"><a href="javascript:void(0)">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
							<rect width="7" height="7" x="6"   y="6" />
							<rect width="7" height="7" x="14" y="6" />
							<rect width="7" height="7" x="6" y="14" />
							<rect width="7" height="7" x="14" y="14" />
						</svg>
					</a></li>
				</ul>
			</nav>
			
			<!-- Gallery __-->
			<div class="gallery masonry-gallery">
				
				<?php
	// WP_Query arguments
	$args = array (
	'post_type' => 'gallery-image',
	'post_status' => 'publish',
	'posts_per_page' =>	-1,
	'order' => 'asc',
	'orderby' => 'title'
	);
	// The Query
	$query = new WP_Query( $args );
	
	// The Loop
	if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
	$query->the_post();
?>
<figure class="gallery-item<?php $gallery_categories = get_the_terms( $post->ID , 'gallery-category' ); foreach ( $gallery_categories as $gallery_category ) { echo ' ' . $gallery_category->slug; } ?>">
					<header class="gallery-icon">
						<a href="http://airy.designagent.sk/html/imgs/photography/landscape01-600x400.jpg" class="popup"><img src="http://airy.designagent.sk/html/imgs/photography/landscape01-600x400.jpg" alt="" /></a>
					</header>	
					<figcaption class='gallery-caption'>
						<div class="entry-summary">
							<h3>Caption of This Beauty</h3>
							<p>Description of an image</p>
						</div>
					</figcaption>
				</figure>
                <?php }
} else {
// no posts found
}
// Restore original Post Data
wp_reset_postdata();
?>
			</div>
			
			

		</div><!-- END .wrapper -->
	</section>
<?php get_footer(); ?>