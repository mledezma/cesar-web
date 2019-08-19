<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="contact__container"> 
    <div class="container pt-5 contact__content">
      <h1 class="contact__title"> <?php the_title() ?> </h1>
      <?php the_content() ?>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>