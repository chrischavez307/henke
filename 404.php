<?php get_header('fullscreen'); ?>
	<section id="content" role="main">
		<div class="featured-image-header">
			<img src="<?php bloginfo('template_directory'); ?>/imgs/photography/fullscreen08.jpg"  alt="" />
		</div>
		<div class="wrapper">
			<!-- WYSIWYG -->
			<div class="position-absolute aligncenter">
				<p class="smaller-padding">404</p>
				<h2><strong>PAGE NOT FOUND</strong></h2>
				
				<hr />
				<p class="smaller-padding">The page you are looking for might have been: </p> 
				<ul>
					<li>removed,</li> 
					<li>had its name changed</li> 
					<li>or is temporarily unavailable.</li> </ul>
				<p><a href="javascript:void(0)" onclick="window.history.go(-1)" class="button">&larr; Go Back</a> &nbsp; <a href="<?php bloginfo('url'); ?>" class="button">Home Page</a></p>
				<hr class="divider" />
			</div>
			
			
			<!-- END WYSIWYG -->
			
		</div><!-- END .wrapper -->
	</section>
<?php get_footer(); ?>