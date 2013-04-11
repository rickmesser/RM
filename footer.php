		<footer id="footer" class="source-org vcard copyright">
			<small>
				TapAlytics services from <a href="http://scenetap.com/">SceneTap</a> <br>
				&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> 
			
			</small>
			<?php wp_nav_menu(array('theme_location' => 'secondary-menu', 'container' => 'nav', 'container_class' => 'foot-nav', 'menu_class' => 'foot', 'fallback_cb' => '')); ?>
		</footer>

	</div>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/bootstrap.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
