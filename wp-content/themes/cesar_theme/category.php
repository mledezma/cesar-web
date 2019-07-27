<?php get_header(); ?>
<?php
	$category = get_queried_object();
	$id = $category->term_id;
	$title = $category->name;
	$imagenMobile = get_field( "imagen_mobile", $category );
	$imagenDesktop = get_field( "imagen_desktop", $category );
	
	$banner = array(
		'title' => $title,
		'img-mobile' => $imagenMobile['url'],
		'img-desktop' => $imagenDesktop['url']
	);

	$GLOBALS['banner-category'] = $banner;

	get_template_part('components/banner', 'category');


	$args = array(
		'numberposts' => 10,
		'category' => $id
	);

	$posts = get_posts( $args );
	if ( $posts ):
?>
	<div class="container pt-5">
		<?php foreach ( $posts as $post ) : setup_postdata( $post );?>
			<?php
				$card = array(
					'title' => get_the_title(),
					'content' => get_the_excerpt(),
					'img' => get_the_post_thumbnail(),
					'date' => get_the_date(),
					'hour' => get_the_time(),
					'author' => get_the_author(),
					'link' => get_permalink()
				);
				$GLOBALS['card-category'] = $card;
				get_template_part('components/card/card', 'category');
			?>
		<?php endforeach; wp_reset_postdata(); ?>
	</div>
<?php endif; ?>
<?php get_footer(); ?>
