<?php
  $card = $GLOBALS['card-blog'];
  $img = array(
    'url' => isset($card['img']['url']) ? $card['img']['url'] : 'https://via.placeholder.com/450x320',
    'alt' => isset($card['img']['alt']) ? $card['img']['alt'] : 'Alt image'
  );
  $cat = isset($card['cat']) ? $card['cat'] : '';
  $date = isset($card['date']) ? $card['date'] : '';
  $title = isset($card['title']) ? $card['title'] : '';
  $content = isset($card['content']) ? $card['content'] : '';
  $link = array(
    'url' => isset($card['link']['url']) ? $card['link']['url'] : '#',
    'text' => isset($card['link']['text']) ? $card['link']['text'] : ''
  );
?>
<div class="card-blog">
  <div class="card-blog__header">
    <img class="card-blog__image" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
    <span class="card-blog__cat"><?= $cat ?></span>
  </div>
  <p class="card-blog__date"><?= $date ?></p>
  <h3 class="card-blog__title"><?= $title ?></h3>
  <div class="card-blog__content"><?php
    echo wp_trim_words( $content, 16, '...' );
  ?>
  </div>
  <a href="<?= $link['url'] ?>" class="card-blog__link btn btn--white"><?= $link['text'] ?></a>
</div>