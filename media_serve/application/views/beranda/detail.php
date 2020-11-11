  <div class="container-fluid">
      <div class="card">
  <div class="card-header">
    Detail Artikel
  </div>
  <div class="card-body">
  <?php foreach($sering as $srg) : ?>
    <div class="row">
    <div class="col-md-4">
        <img src="<?php echo base_url().'/assets/'. $srg->gambar ?>">
     </div>

    <div class="col-md-8"> </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
  </div>