<?php

  if (function_exists('add_theme_support')){
      // Add Menu Support
      add_theme_support('menus');

      // Add Thumbnail Theme Support
      add_theme_support('post-thumbnails');
      add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

      // Add post formats
      // http://codex.wordpress.org/Post_Formats
      // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

      // Add HTML5 markup for captions
      // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
      // add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

      // Enables post and comment RSS feed links to head
      // add_theme_support('automatic-feed-links');

      // Localisation Support
      load_theme_textdomain('coyote', get_template_directory() . '/languages');

      // Tell the TinyMCE editor to use a custom stylesheet
      //TODO
      add_editor_style('/public/css/editor-style.css');

  }

 ?>
