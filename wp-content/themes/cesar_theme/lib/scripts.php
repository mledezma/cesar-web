<?php

/**
 * Scripts and stylesheets
**/

/**
* Development o Production
* - Carga los archivos dependiendo de la variable de ambiente en config.php
* - En Gruntfile.js unifica los js con uglify
* - $assets se definen las rutas de los archivos
**/

function scripts() {

  $css = $GLOBALS['css'];
  $js = $GLOBALS['js'];

  /**
   * jQuery is loaded using the same method from HTML5 Boilerplate:
   **/
  // if (!is_admin() && current_theme_supports('jquery-cdn')) {
  //   wp_deregister_script('jquery');
  //   wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), null, true);
  //   add_filter('script_loader_src', 'jquery_local_fallback', 10, 2);
  // }

  if (!is_admin() && current_theme_supports('jquery-cdn')) {
    wp_deregister_script('jquery');
  }

  //Comments
  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }


  /**
  * CDN o archivos que se ocupen tanto en Development como Production
  * Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
  * It's kept in the header instead of footer to avoid conflicts with plugins.
  */
  //CSS
  wp_enqueue_style('css', get_template_directory_uri() . $css, false, null);
  //JS
  // wp_enqueue_script('jquery');

  /**
  * Defino las funciones a cargar wp_enqueue_script files dependiendo del ambiente
  **/
  $ar = array();

  wp_enqueue_script('script', get_template_directory_uri() . $js, $ar, null, true);


  /**
   * Adds livereload and local styles for local enviroment
  **/
  if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
    wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
    wp_enqueue_script('livereload');
  }

  /**
   * WP localize script
  **/
  wp_localize_script(
    'script',
    'jsforwp_globals',
    [
      'ajax_url'    => admin_url( 'admin-ajax.php' ),
      'nonce'       => wp_create_nonce( 'jsforwp_nonce' )
    ]
  );
}

 /**
 * wp_enqueue_scripts de la funcion script
 **/
// http://wordpress.stackexchange.com/a/12450
// function jquery_local_fallback($src, $handle = null) {
//   static $add_jquery_fallback = false;

//   if ($add_jquery_fallback) {
//     echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . 'public/js/lib/jquery-1.11.0.min.js?1.11.1"><\/script>\')</script>' . "\n";
//     $add_jquery_fallback = false;
//   }

//   if ($handle === 'jquery') {
//     $add_jquery_fallback = true;
//   }

//   return $src;
// }

add_filter("gform_init_scripts_footer", "init_scripts");
function init_scripts() {
  return true;
}

// add_action('wp_head', 'jquery_local_fallback');
add_action('wp_enqueue_scripts', 'scripts', 100);

add_filter( 'excerpt_length', function($length) {
  return 20;
} );

// Allow svg
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// CTP
include_once('CPT/services.php');
include_once('CPT/earnings.php');
?>
