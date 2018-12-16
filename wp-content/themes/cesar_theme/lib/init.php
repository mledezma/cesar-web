<?php

  // Add Actions
  add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
  add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
  // add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
  // add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
  add_action('login_head', 'my_login_head');

  //
  // CustomTypePost
  //
  // add_action('init', 'ctp'); // Add our HTML5 Blank Custom Post Type

  // Remove Actions
  remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
  remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
  remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
  remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
  remove_action('wp_head', 'index_rel_link'); // Index link
  remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
  remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
  remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'rel_canonical');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

  // Add Filters
  add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
  // add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
  add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
  add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
  // add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
  // add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
  // add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
  // add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
  // add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
  add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
  add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
  // add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
  // add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
  // add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
  add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
  add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

  // Remove Filters
  remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

  // Shortcodes
  // add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
  // add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

 ?>
