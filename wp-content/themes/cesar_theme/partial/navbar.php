<div class="navbar">
  <a class="logo" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php root(); echo $GLOBALS['img'] ?>/logo.svg" alt=""></a>
  <div class="icon-hamburger__wrapper d-md-none">
    <div class="icon-hamburger"></div>
  </div>
  <nav class="nav">
    <a href="<?= get_permalink(get_page_by_path('acerca-de')) ?>">Acerca de</a>
    <!-- <a href="#">Servicios</a>
    <a href="#">Resultados</a>
    <a href="#">Tienda</a> -->
    <ul href="#" class="nav__dropdown">
      <a href="#">Blog</a>
      <nav class="nav__sub">
        <a href="<?= get_site_url() ?>/categoria/salud">Salud</a>
        <a href="<?= get_site_url() ?>/categoria/laboral">Laboral</a>
        <a href="<?= get_site_url() ?>/categoria/personal">Personal</a>
      </nav>
    </ul>
    <a href="<?= get_permalink(get_page_by_path('contacto')) ?>">Contacto</a>
  </nav>
  <a href="#" class="btn">Empezar</a>
</div>
