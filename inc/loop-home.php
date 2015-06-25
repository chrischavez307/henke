<div class="gallery fullscreen-gallery">
				<figure class="post format-gallery gallery-item horizontal">
					<header class="gallery-icon">
						<img src="<?php bloginfo('template_directory'); ?>/imgs/henke-main.jpg" alt="" />
					</header>	
					<figcaption class="gallery-caption">
						<div class="entry-summary">
							<h2 class="big no-margin"><strong><?php bloginfo('name'); ?></strong></h2>
							<h2><?php bloginfo('description'); ?></h2><br />
							<div class="blog-oneline-carousel">
								<h3>Latest</h3>
								<div class="viewport">
                                <ul class="overview">
									<?php $the_query = new WP_Query( 'showposts=3' ); ?>
                                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                    <li><p><?php the_time('m/d') ?> &nbsp; <?php the_title(); ?><a href="<?php the_permalink() ?>"> Read More</a></p></li>
                                    <?php endwhile;?>
                                </ul>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>