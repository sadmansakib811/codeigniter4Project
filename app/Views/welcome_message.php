<?= $this->extend('public_layout') ?>
<?= $this->section('content') ?>
<div class='container'>
    <div class='row'>
         <div class='col-sm-12'>
              <h1>This is Home</h1>
              <!-- slider start -->
              
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?= base_url() ?>public/images/banner.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?= base_url() ?>public/images/01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url() ?>public/images/02.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
              <!-- slider finish -->
         </div>
    </div>
</div>



<?= $this ->endSection() ?>