<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <h1 class="services__title"> <?php the_title() ?> </h1>
  <?php 
    $args = array(
      'post_type' => 'results',
      'post_status' => 'publish',
      'posts_per_page' => 3
    );

    $results = get_posts($args);
    if ( $results ): ?>
      <div class="results__container">
        <?php foreach ( $results as $post ) : 
          setup_postdata( $post );
          $title = get_the_title();
          $video = get_field('video');
          $position = get_field('position');
          $quote = get_field('quote');

          $GLOBALS['card-video'] = array(
            'video' => $video,
            'title' => $title,
            'position' => $position,
            'quote' => $quote
          );
        ?>
          <?php get_template_part('components/card/card', 'video') ?>
        <?php endforeach; wp_reset_postdata();?>
      </div>
    <?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>