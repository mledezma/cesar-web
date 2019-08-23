<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <h1 class="services__title"> <?php the_title() ?> </h1>

  <?php
    $args = array(
      'post_type' => 'services',
      'post_status' => 'publish',
      'posts_per_page' => 3
    );

    $services = get_posts($args);
    
    if ( $services ): ?>
      <div class="container pb-5 d-none d-lg-block">
        <div class="row">
          <?php foreach ( $services as $post ) : 
            setup_postdata( $post );
            $title = get_the_title();
            $icon = get_field('icono');
            $content = get_field('descripcion');
            $price = get_field('precio');

            $GLOBALS['card-service'] = array(
              'title' => $title,
              'icon' => $icon,
              'content' => $content,
              'price' => $price
            );


          ?>
            <div class="col-4 px-2 px-xl-5">
              <?php get_template_part('components/card/card', 'service') ?>
            </div>
          <?php endforeach; wp_reset_postdata();?>
        </div>
      </div>

      <div class="container-fluid pb-5 d-lg-none slider-services px-0">
        <?php foreach ( $services as $post ) : 
          setup_postdata( $post );
          $title = get_the_title();
          $icon = get_field('icono');
          $content = get_field('descripcion');
          $price = get_field('precio');

          $GLOBALS['card-service'] = array(
            'title' => $title,
            'icon' => $icon,
            'content' => $content,
            'price' => $price
          );


        ?>
          <div class="col-12 px-1 px-sm-4 px-md-5">
            <?php get_template_part('components/card/card', 'service') ?>
          </div>
          <div class="col-12 px-1 px-sm-4 px-md-5">
            <?php get_template_part('components/card/card', 'service') ?>
          </div>
          <div class="col-12 px-1 px-sm-4 px-md-5">
            <?php get_template_part('components/card/card', 'service') ?>
          </div>
        <?php endforeach; wp_reset_postdata();?>
      </div>
    <?php endif; ?>

  <?php
    $args = array(
      'post_type' => 'earnings',
      'post_status' => 'publish',
      'posts_per_page' => 3
    );

    $earnings = get_posts($args);
    
    if ( $earnings ): ?>  
      <div class="earnings-section">
        <div class="container">
          <h3 class="earnings-section__title">Ganancias</h3>

          <div class="row">
            <?php foreach ( $earnings as $post ) : 
              setup_postdata( $post );
              $title = get_the_title();
              $icon = get_field('icono');
              $content = get_field('descripcion');

              $GLOBALS['card-earning'] = array(
                'title' => $title,
                'icon' => $icon,
                'content' => $content,
                'price' => $price
              );
            ?>
              <div class="col-12 col-md-6 col-lg-4">
                <?php get_template_part('components/card/card', 'earning'); ?>
              </div>
            <?php endforeach; wp_reset_postdata();?>
          </div>
        </div>
      </div>
    <?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>