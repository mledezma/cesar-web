<?php
function call_ajax() {
   $path = '';
      //Query
      query_posts( $_POST['query']);

      while ( have_posts() ) : the_post();
        get_template_part($path);
      endwhile;

      // Reset Query
      wp_reset_query();
      die();
}

add_action( 'wp_ajax_nopriv_call_ajax', 'call_ajax' );
add_action( 'wp_ajax_call_ajax', 'call_ajax' );
 ?>
