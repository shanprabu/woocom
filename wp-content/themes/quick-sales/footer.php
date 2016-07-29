		</div>
	</div>

		<footer id="mastfooter" role="contentinfo">
			<div class="content_wrapper">

				<?php get_sidebar('footer'); ?>

				<div class="site-info">
					<div><?php echo esc_html( get_theme_mod('quick_sales_text_in_footer', __('Footer text', 'quick-sales') ) ); ?></div>
					<div><?php echo __('Powered by WordPress', 'quick-sales'); ?></div>
				</div>

			</div>
		</footer>

	</div>

	<?php wp_footer(); ?>
</body>
</html>
