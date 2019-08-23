<div class="py-5 bg-blue-green">
  <h3 class="text-center text-white mb-4">Últimos tips y guías</h3>
  <div class="container mt-5 pt-lg-3">
    <?php 
      $recent_posts = get_posts(array(
        'numberposts' => 6, 
        'post_status' => 'publish',
        'order'            => 'DESC'
      ));

      if($recent_posts):
    ?>
      <div class="row justify-content-between">
        <?php foreach($recent_posts as $post) : ?>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <?php
              setup_postdata( $post );
              $image = get_the_post_thumbnail_url();
              $fullTitle = get_the_title();
              $title = trunc($fullTitle, 6);
              $catID = get_the_category()[0]->term_id;
              $catName = get_cat_name($catID);
              $catUrl = get_category_link($catID);
              $date = get_the_modified_date();
              $content = get_the_excerpt();
              $link = get_permalink();

              $GLOBALS['card-blog'] = array(
                'img' => array(
                  'url' => $image,
                  'alt' => $fullTitle
                ),
                'cat' => array(
                  'name' => $catName,
                  'url' => $catUrl
                ),
                'date' => $date,
                'title' =>  $title,
                'content' => $content,
                'link' => array(
                  'url' => $link,
                  'text' => 'Leer más'
                )
              );
              get_template_part('components/card/card', 'blog');
            ?>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
