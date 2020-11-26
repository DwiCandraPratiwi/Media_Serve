<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <ul class="nav navbar-nav">
    <li><img class="image" border="0" src="assets/img/foto1.png" width="42px" style="margin: 1px;padding: 0px; color:white;">-----</li>
  </ul></b>
  <a class="navbar-brand" href="#">Media Serve</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ketegori
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Berita</a>
          <a class="dropdown-item" href="#">Kecantikan</a>
          <a class="dropdown-item" href="#">Kesehatan</a>
        </div>
      </div>
      <li class="nav-item">
        <a class="nav-link" href="../auth/login.php">Login</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/covid2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/covid1.jpg" class="d-block w-100" alt="...">
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container-fluid">
      <div class="row mt-3">
        <?php foreach ($sering as $srg) : ?>
          <div class="card ml-3" style="width: 16rem;">
            <img src="<?= 'assets/img/' . $srg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $srg->judul ?></h5>

              <p class="card-text"><?php echo $srg->deskripsi ?></p>
              <?php echo anchor('beranda/detail/' . $srg->id, '<div class="btn-sm btn-primary">Detail</div>') ?>
            </div>
          </div>
        <?php endforeach; ?>