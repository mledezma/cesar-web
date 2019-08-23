<?php
  $card = $GLOBALS['card-video'];
  $video = isset($card['video']) ? $card['video'] : '';
  $title = isset($card['title']) ? $card['title'] : '';
  $position = isset($card['position']) ? $card['position'] : '';
  $quote = isset($card['quote']) ? $card['quote'] : '';
?>
<div class="card-video">
  <?= $video ?>
  <h3 class="card-video__title"><?= $title ?></h3>
  <h4 class="card-video__position"><?= $position ?></h4>
  <p class="card-video__quote"><?= $quote ?></p>
</div>