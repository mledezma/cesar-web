<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php
    $id = get_the_ID();
    $title = get_field('titulo', $id);
    $background = get_field('fondo', $id);
    $person = get_field('persona', $id);
  ?>
  <div class="page-about__background" style="background-image: url(<?= $background ?>)">
    <div class="col-12 col-md-5 px-0 mb-4 mb-lg-0">
      <img class="page-about__person" src="<?= $person ?>" alt="Photo of Cesar Jara">
    </div>
    <div class="col-12 col-md-6 px-0 pl-md-4 py-md-5 pb-5 pl-3">
      <h1 class="page-about__title"><?= $title ?></h1>
      <div class="page-about__content">
        <?php the_content() ?>
      </div>
      <a href="#" class="btn">Deseo cambiar mi vida</a>
    </div>
  </div>
<?php	endwhile;?>

<?php get_footer(); ?>
