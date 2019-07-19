<?php get_header(); ?>

	<h1><?php echo __( 'Tag Archive: ', 'coyote' ); echo single_tag_title('', false); ?></h1>

	<?php get_template_part('loop'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
