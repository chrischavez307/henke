<div class="column-grid column-grid-3">
    <div class="column column-span-1 column-push-0 column-first">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>