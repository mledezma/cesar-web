<?php

  // Register HTML5 Blank Navigation
  function register_html5_menu(){
    register_nav_menus(array( // Using array to specify more menus if needed
      'header-main' => __('Header - Main Menu', 'html5blank'),
      'header-modes' => __('Header - Modes', 'html5blank'),
      'header-business' => __('Header - Business', 'html5blank'),
      'header-top' => __('Header - Top', 'html5blank'),
      'footer-ship-freight' => __('Footer - Ship Freight', 'html5blank'),
      'footer-books-load' => __('Footer - Books Load', 'html5blank'),
      'footer-company' => __('Footer - Company', 'html5blank'),
      'footer-technology' => __('Footer - Technology', 'html5blank'),
      'footer-get-our-app' => __('Footer - Get Our App', 'html5blank'),
      'footer-bottom' => __('Footer - Bottom', 'html5blank')
    ));
  }

  // HTML5 Blank navigation
  function html5blank_nav(){
    wp_nav_menu(
    array(
      'theme_location'  => 'header-menu',
      'menu'            => '',
      'container'       => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
      )
    );
  }
