<?php get_header(); ?>
	<section id="content" role="main">
		<div class="wrapper">
	        <h2>Shop Title - What do you want this to say?</h2>
            <nav id="gallery-filter">
				<ul>
                	<li><a href="javascript:void(0)" data-filter="*" class="active">All</a></li>
					<?php $product_categories = get_terms('product_cat'); foreach ($product_categories as $product_category){ echo '<li><a href="javascript:void(0)" data-filter=".' .$product_category->slug.'">'. $product_category->name .'</a></li>'; } ?>
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

            <?php woocommerce_content(); ?>
			<!-- WYSIWYG ends here __-->
		</div><!-- END .wrapper -->
		
	</section>


<?php get_footer(); ?>