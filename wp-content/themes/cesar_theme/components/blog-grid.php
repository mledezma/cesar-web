<div class="py-5 bg-blue-green">
  <h3 class="text-center text-white mb-4">Últimos tips y guías</h3>
  <div class="container mt-5 pt-lg-3">
    <div class="row justify-content-between">
      <div class="col-12 col-md-6 col-lg-4">
        <?php 
          $GLOBALS['card-blog'] = array(
            'img' => array(
              'url' => 'https://via.placeholder.com/450x320',
              'alt' => 'Image Alt'
            ),
            'cat' => 'Laboral',
            'date' => '11 Septiembre 2017',
            'title' => 'Primeras impresiones con spinning',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'link' => array(
              'url' => '#',
              'text' => 'Leer más'
            )
          );
          get_template_part('components/card/card', 'blog');
        ?>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <?php 
          $GLOBALS['card'] = array(
            'img' => array(
              'url' => 'https://via.placeholder.com/450x320',
              'alt' => 'Image Alt'
            ),
            'cat' => 'Laboral',
            'date' => '11 Septiembre 2017',
            'title' => 'Primeras impresiones con spinning',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'link' => array(
              'url' => '#',
              'text' => 'Leer más'
            )
          );
          get_template_part('components/card/card', 'blog');
        ?>
      </div>  
    </div>
  </div>
</div>
