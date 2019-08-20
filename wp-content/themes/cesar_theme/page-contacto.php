<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php 
    $id = get_the_ID();
    $banner = get_field('banner', $id);
  ?>

  <div class="contact__container">
    <div class="contact__container-left">
      <img src="<?= $banner ?>" alt="Cesar Jara Picture">
    </div>
    <div class="contact__container-right">
      <div class="pt-5 px-5 contact__content">
        <h1 class="contact__title"> <?php the_title() ?> </h1>
        <?php the_content() ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>