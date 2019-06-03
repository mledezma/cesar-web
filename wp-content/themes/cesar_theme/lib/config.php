<?php

  //
  // Variables
  // --------------------------------------------------

  $get_assets = file_get_contents(get_template_directory() . '/package.json');
  $json = json_decode($get_assets, true);
  $version = $json['version'];

  $preRootJS = '/public/js';
  $preRootCss =  '/public/css';
  $preRootImg =  '/public/img';

  $assets_css = $preRootCss.'/styles.css';
  $assets_js = $preRootJS.'/main.bundle.js';
  $WP_ENV = '';

  // --------------------------------------------------
  // Ambiente
  // --------------------------------------------------
  if ( $_SERVER["SERVER_ADDR"] == '127.0.0.1' || $_SERVER["SERVER_ADDR"] == '::1') {
    $WP_ENV = 'development';
  } else {
    $WP_ENV = 'production';
  }

  /**
  * Development o Production files
  **/
  if ($WP_ENV === 'production') {
    $preRootJS = '/public-build/js';
    $preRootCss =  '/public-build/css';
    $preRootImg =  '/public-build/img';

    $assets_css = $preRootCss.'/styles.min.css?_=' . $version;
    $assets_js = $preRootJS.'/main.bundle.min.js?_=' . $version;
  }

  /**
  * GLOBALS
  **/
 $GLOBALS['env'] = $WP_ENV;
 $GLOBALS['css'] = $assets_css;
 $GLOBALS['js'] = $assets_js;
 $GLOBALS['img'] = $preRootImg;

 ?>
