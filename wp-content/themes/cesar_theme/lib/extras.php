<?php

  //Root project
  function root(){
    $ruta =  get_template_directory_uri();
     echo $ruta;
  };


  function my_login_head() {
    echo "
    <style>
    body.login #login h1 a {
      background: url('".get_template_directory_uri()."/images/logo-login.gif') no-repeat scroll center top transparent;
      height: 90px;
      width: 400px;
    }
    </style>
    ";
  }


  function getYoutubeIdFromUrl($url) {
    $parts = parse_url($url);
    if(isset($parts['query'])){
        parse_str($parts['query'], $qs);
        if(isset($qs['v'])){
            return $qs['v'];
        }else if(isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if(isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return false;
  }

  // Remove the <div> surrounding the dynamic navigation to cleanup markup
  // function my_wp_nav_menu_args($args = '')
  // {
  //     $args['container'] = false;
  //     return $args;
  // }

  // Remove Injected classes, ID's and Page ID's from Navigation <li> items
  // function my_css_attributes_filter($var)
  // {
  //     return is_array($var) ? array() : '';
  // }

  // Remove invalid rel attribute values in the categorylist
  // function remove_category_rel_from_category_list($thelist)
  // {
  //     return str_replace('rel="category tag"', 'rel="tag"', $thelist);
  // }

  // Add page slug to body class, love this - Credit: Starkers Wordpress Theme
  // function add_slug_to_body_class($classes)
  // {
  //     global $post;
  //     if (is_home()) {
  //         $key = array_search('blog', $classes);
  //         if ($key > -1) {
  //             unset($classes[$key]);
  //         }
  //     } elseif (is_page()) {
  //         $classes[] = sanitize_html_class($post->post_name);
  //     } elseif (is_singular()) {
  //         $classes[] = sanitize_html_class($post->post_name);
  //     }

  //     return $classes;
  // }

  // Remove wp_head() injected Recent Comment styles
  // function my_remove_recent_comments_style()
  // {
  //     global $wp_widget_factory;
  //     remove_action('wp_head', array(
  //         $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
  //         'recent_comments_style'
  //     ));
  // }

  // Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
  // function html5wp_pagination()
  // {
  //     global $wp_query;
  //     $big = 999999999;
  //     echo paginate_links(array(
  //         'base' => str_replace($big, '%#%', get_pagenum_link($big)),
  //         'format' => '?paged=%#%',
  //         'current' => max(1, get_query_var('paged')),
  //         'total' => $wp_query->max_num_pages
  //     ));
  // }

  // Custom Excerpts
  // function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
  // {
  //     return 20;
  // }

  // // Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
  // function html5wp_custom_post($length)
  // {
  //     return 40;
  // }

  // Create the Custom Excerpts callback
  // function html5wp_excerpt($length_callback = '', $more_callback = '')
  // {
  //     global $post;
  //     if (function_exists($length_callback)) {
  //         add_filter('excerpt_length', $length_callback);
  //     }
  //     if (function_exists($more_callback)) {
  //         add_filter('excerpt_more', $more_callback);
  //     }
  //     $output = get_the_excerpt();
  //     $output = apply_filters('wptexturize', $output);
  //     $output = apply_filters('convert_chars', $output);
  //     $output = '<p>' . $output . '</p>';
  //     echo $output;
  // }

  // Custom View Article link to Post
  // function html5_blank_view_article($more)
  // {
  //     global $post;
  //     return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'coyote') . '</a>';
  // }

  // Remove Admin bar
  // function remove_admin_bar()
  // {
  //     return true;
  // }

  // Remove 'text/css' from our enqueued stylesheet
  // function html5_style_remove($tag)
  // {
  //     return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
  // }

  // Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
  function remove_thumbnail_dimensions( $html )
  {
      $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
      return $html;
  }

  // Custom Gravatar in Settings > Discussion
  function html5blankgravatar ($avatar_defaults)
  {
      $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
      $avatar_defaults[$myavatar] = "Custom Gravatar";
      return $avatar_defaults;
  }

  // Threaded Comments
  function enable_threaded_comments()
  {
      if (!is_admin()) {
          if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
              wp_enqueue_script('comment-reply');
          }
      }
  }

 ?>
