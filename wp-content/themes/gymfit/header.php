<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<!-- contact -->
				<section class="container-fluid bg-black text-light d-none d-lg-block py-2 px-4">
					<div class="row justify-content-right">
						<p class="col-10 text-right">Contáctame al 8888-8888</p>
						<!-- Social Media -->
						<div class="col-2">
							<a class="" href="https://www.instagram.com/cesarjara85/">Instagram</a>
							<a class="" href="https://www.facebook.com/cesarjara85">Facebook</a>
						</div>
						<!-- Social Media -->
					</div>
				</section>
				<!-- contact -->
				<!-- nav -->
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<!-- logo -->
					<a href="<?php echo home_url(); ?>" class="navbar-brand" href="#">
						<img src="http://via.placeholder.com/100x50" alt="Logo" class="logo-img">
					</a>
					<!-- /logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="about">Acerca de <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Servicios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Resultados</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Tienda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Blog</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contacto</a>
							</li>
						</ul>
					</div>
					<form class="form-inline d-lg-inline d-none">
						<button class="btn btn-outline-danger" type="button">Empezar</button>
					</form>
				</nav>
				<!-- /nav -->
			</header>
			<!-- /header -->
