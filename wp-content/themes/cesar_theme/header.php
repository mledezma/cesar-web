<?php include 'lib/config.php'; ?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>

    	<title><?php wp_title(''); ?></title>
    	<link href="//www.google-analytics.com" rel="dns-prefetch">
      <link href="<?php echo root(); ?>/public/img/favicons/favicon.ico" rel="shortcut icon">

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->
      <meta charset="<?php bloginfo('charset'); ?>">

      <?php
        include 'includes/favicons.php';
      ?>

      <script>
        window.directory = <?= json_encode(get_template_directory_uri()); ?>;
        window.siteUrl = <?= json_encode(get_site_url()); ?>;
        window.isHome = <?= json_encode(is_home() || is_page_template('templates/home.php')); ?>;
      </script>
      <!--[if lt IE 9]>
        <script src="<?php echo root(); ?>/public/js/html5shiv.min.js"></script>
      <![endif]-->

    <?php wp_head(); ?>
	</head>
  <body <?php body_class('site'); ?>>
    <div class="header">
      <?php get_template_part('partial/navbar'); ?>
    </div>
    <main class="site-content"> <!-- Starts Site Content -->
