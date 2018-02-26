			<!-- footer -->
			<footer class="bg-black text-white m-auto p-4" role="contentinfo">
				<div class="row justify-content-right">
					<!-- copyright -->
					<p class="copyright col-12 text-center">
						&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> - Marco Ledezma Cordero - Full Stack Developer
					</p>
					<!-- /copyright -->
				</div>
				<!-- Social Media -->
				<div class="d-md-none">
					<?php get_template_part( 'partials/contact' ) ?>
				</div>
				<!-- Social Media -->
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
