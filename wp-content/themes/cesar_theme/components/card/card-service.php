<?php
  $card = $GLOBALS['card-service'];
  $title = isset($card['title']) ? $card['title'] : '';
  $icon = isset($card['icon']) ? $card['icon'] : '';
  $content = isset($card['content']) ? $card['content'] : '';
  $price =isset($card['price']) ? $card['price'] : '';
?>
<div class="card-service">
  <img class="card-service__image" src="<?= $icon ?>" alt="<?= $title ?> Icon">
  <h4 class="card-service__title"><?= $title ?></h4>
  <p class="card-service__description"><?= $content ?></p>
  <p class="card-service__price"> Con un costo de: <span class="card-service__quote"><?= $price ?></span><span class="card-service__month">mensuales</span></p>
  <a href="#" class="btn">Leer más</a>
</div>