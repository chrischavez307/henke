<?php get_header('blog'); ?>
	<section id="content" role="main">
		<div class="wrapper">
			<?php 
			get_template_part('inc/grid-changer');
			get_template_part('inc/loop-timeline');
			get_template_part('inc/loop-blog');
            ?>
		</div><!-- END .wrapper -->
	</section>
<?php get_footer(); ?>