<?php

  // Register HTML5 Blank Navigation
  function register_html5_menu(){
    register_nav_menus(array( // Using array to specify more menus if needed
      'header-main' => __('Header - Main Menu', 'html5blank'),
    ));
  }
