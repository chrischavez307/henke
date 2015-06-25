<div id="blog-post">
    <article class="entry post">
        <div class="entry-meta">
            <div class="entry-date">
                <?php the_time('F d, Y') ?>
            </div>
            <div class="entry-category">
                <?php the_category(', '); ?>
            </div>
        </div>
        <div class="entry-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </article>
</div>