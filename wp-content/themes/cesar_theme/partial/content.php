<?php $thecontent = get_the_content();
  if(!empty($thecontent)){
?>
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <?php echo $thecontent; ?>
        </div>
      </div>
    </div>
<?php
  }
?>
