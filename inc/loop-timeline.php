<div id="blog-timeline">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="active">
        <div class="featured-image">
	    <a href="#"><img src="http://placehold.it/600x400" alt="" /></a>
   		</div>
        <div class="entry-meta">
            <div class="entry-date">
			<?php the_time('F d, Y') ?>
            </div>
            <div class="entry-category">
            <?php the_category(', '); ?>
            </div>
        </div>
        <h2><?php the_title(); ?></h2>
        <div class="entry-summary">
            <?php the_content(); ?>
   		<p><a href="<?php the_permalink(); ?>">Read more</a></p>
        </div>
    </article>
    <?php endwhile; endif; ?>
</div>