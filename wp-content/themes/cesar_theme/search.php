<?php get_header(); ?>

	<h1><?php echo sprintf( __( '%s Search Results for ', 'coyote' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

<h1><?php echo sprintf( __( '%s Search Results for 222 ', 'coyote' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
	<?php get_template_part('loop'); ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
