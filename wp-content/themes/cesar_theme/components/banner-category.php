<?php
  $banner = $GLOBALS['banner-category'];

  $title = isset($banner['title']) ? $banner['title'] : '';

  $imgMobile = isset($banner['img-mobile']) ? $banner['img-mobile'] : '';

  $imgDesk = isset($banner['img-desktop']) ? $banner['img-desktop'] : '';
?>

<div class="banner-category">
  <img
    srcset="
      <?= $imgDesk ?>,
      <?= $imgMobile ?> 768w
    "
    src="<?= $imgDesk ?>" alt="Banner - Blog"
  >

  <div class="banner-category__side">
    <h1 class="banner-category__title"><?= $title ?></h1>
  </div>
</div>