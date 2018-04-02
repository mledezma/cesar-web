<?php get_header(); ?>

	<main role="main">
		<!-- Head -->
		<section class="container-fluid">
			<div class="row">
				<div class="col-12 bg-secondary text-center py-5">
					<h1 class="text-light pb-5">¿Quieres cambiar tu salud?</h1>
					<button type="button" class="btn btn-outline-light">Si, quiero hacer el cambio</button>
				</div>
			</div>
		</section>
		<!-- /Head -->
		<!-- /Steps -->
		<section class="container-fluid py-5 mw-md-75 mw-lg-50 text-center">
			<h2 class="text-danger pb-5">Mis secretos para una vida saludable</h2>
			<?php
				$params = array(
					'limit' => 3,
				);
				$beneficios = pods('beneficio', $params);
				//echo '<pre>' . var_export( $beneficios->total(), true) . '</pre>'
			?>

			<?php if ($beneficios->total() > 0): ?>
				<?php $count = 0?>
				<?php while ($beneficios->fetch()): ?>
					<?php $count++?>
					<?php
						$beneficios->id = $beneficios->id();
						$descripcion = $beneficios->field('descripcion');
						$icono = $beneficios->field('icono');
						$icono_src = $icono['guid'];
						$icono_alt = $icono['post_title'];
						$title = $beneficios->field('title');
					//echo '<pre>' . var_export( $beneficios->field('title'), true) . '</pre>'										
					?>

					<div class="row m-auto">
						<?php if($count%2 === 1): ?>
							<div class="col-12 col-md-6 px-md-5 mb-md-5">
								<img class="img-fluid" src="<?= $icono_src ?>" alt="<?= $icono_alt ?>">
							</div>
							<div class="col-12 col-md-6 px-md-5 mb-md-5 text-md-left">
								<h3 class="text-danger py-3"><?= $title ?></h3>
								<?= $descripcion ?>
							</div>
						<?php else: ?>

							<div class="col-12 col-md-6 px-md-5 mb-md-5 text-md-right">
								<h3 class="text-danger py-3"><?= $title ?></h3>
								<?= $descripcion ?>
							</div>
							<div class="col-12 col-md-6 px-md-5 mb-md-5">
								<img class="img-fluid" src="<?= $icono_src ?>" alt="<?= $icono_alt ?>">								
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>				
			<?php endif; ?>

			<button type="button" class="m-auto btn btn-outline-danger">Empezar ahora</button>				
		</section>
		<!-- /Steps -->	
		<!-- /Tips -->
		<section class="container-fluid py-5 text-center text-light bg-secondary">
			<h2 class="pb-5">Últimos tips y guías</h2>
			<div class="row justify-content-center">
				<?php
					$args = array(
						'post_type' => 'post',
					);
					// The Query
					$the_query = new WP_Query( $args );
				?>
				<?php if ( $the_query->have_posts() ): ?>
					<?php while ( $the_query->have_posts() ):?>
						<?php $the_query->the_post(); ?>
						<div class="col-12 col-md-6 col-lg-4 p-md-5 mb-5 mb-md-0">
							<div class="position-relative">
								<?= the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid'])?>
								<h3 class="position-absolute category text-danger bg-light p-1"><?php the_category('') ?></h3>
							</div>
							<p class="mt-2"><?php the_date() ?></p>
							<h3 class="bg-danger py-3"><?php the_title() ?></h3>
							<div class="d-none d-md-block"> <?php the_content() ?> </div>
							<a href="<?php the_permalink() ?>" class="m-auto btn btn-outline-light btn-sm">Leer más</a>				
						</div>
						<!-- Restore original Post Data -->
						<?php wp_reset_postdata(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>				
		</section>
		<!-- /Tips -->	
	</main>

<?php get_footer(); ?>