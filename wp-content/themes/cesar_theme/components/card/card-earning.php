<?php
  $card = $GLOBALS['card-earning'];
  $title = isset($card['title']) ? $card['title'] : '';
  $icon = isset($card['icon']) ? $card['icon'] : '';
  $content = isset($card['content']) ? $card['content'] : '';
?>
<div class="card-earning">
  <img class="card-earning__image" src="<?= $icon ?>" alt="<?= $title ?> Icon">
  <div class="card-earning__content">
    <h4 class="card-earning__title"><?= $title ?></h4>
    <p class="card-earning__description"><?= $content ?></p>
  </div>
</div>