	<footer id="footer" role="contentinfo">
		<p class="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> | <a href="http://www.thechrischavez.com">Website by Chris Chavez</a></p>
        <ul class="social-icons">
			<li><a href="#" target="_blank" title="Flickr"><i class="icon-flickr"></i></a></li>
			<li><a href="#" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li>
			<li><a href="#" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>								
		</ul>	
	</footer>
<?php wp_footer(); ?>
<?php if ( is_page( 'contact' ) ){ ?>
<script type="text/javascript">
				jQuery(window).load(function() {
					jQuery("#gmap").gMap({
						scrollwheel: false,
						zoom: 14,
						markers:[{
							address: "Wellington, CO",
							icon: {
								image: "<?php bloginfo('template_directory'); ?>/imgs/mapmarker.png", iconsize: [48,48], iconanchor: [48,48]
							}
							}],
						controls: {
						   panControl: true,  zoomControl: true,   mapTypeControl: false,   scaleControl: true,   streetViewControl: false,   overviewMapControl: false
						},
					});
				});
				</script>
				<!-- include map scripts -->
				<script src="http://maps.google.com/maps/api/js?sensor=true&#038;ver=4.0"></script>
<?php } ?>
</body>
</html>