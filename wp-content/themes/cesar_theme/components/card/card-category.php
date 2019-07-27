<?php
  $card = $GLOBALS['card-category'];
  $img = $card['img'] !== '' ? $card['img'] : '<img src="https://via.placeholder.com/450x320" alt="Post thumbnail" />';
  $title = isset($card['title']) ? $card['title'] : '';
  $content = isset($card['content']) ? $card['content'] : '';
  $date = isset($card['date']) ? $card['date'] : '';
  $hour = isset($card['hour']) ? $card['hour'] : '';
  $author = isset($card['author']) ? $card['author'] : '';
  $link = isset($card['link']) ? $card['link'] : '#';
?>

<div class="card-category">
  <div class="col-12 col-md-6">
    <?= $img ?>
  </div>
  <div class="col-12 col-md-6 mt-3 mt-md-0 pb-3">
    <h3 class="card-category__title"><?= $title ?></h3>
    <p class="card-category__date"><?= $date ?> | <?= $hour ?></p>
    <p class="card-category__content"><?= $content ?></p>
    <p class="card-category__author">por <?= $author ?></p>
    <a class="btn" href="<?= $link ?>">Leer más</a>
  </div>
</div>