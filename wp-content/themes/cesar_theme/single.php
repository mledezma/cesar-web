<?php get_header(); ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php if ( has_post_thumbnail() ): ?>
      <div class="banner-single">
        <?php the_post_thumbnail( 'full' ); ?>
      </div>
    <?php endif; ?>
    <div class="single-wysiwyg container">
      <h1 class="single-wysiwyg__title"><?php the_title() ?></h1>
      <p class="single-wysiwyg__info"><?php the_date() ?> | <?php the_author() ?></p>
      <div class="single-wysiwyg__content">
        <?php the_content() ?>
      </div>
    </div>
  <?php endwhile; ?>
  
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d3cab835e27c53d"></script>
<?php get_footer(); ?>
