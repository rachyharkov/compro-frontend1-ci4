<style>
  .section-hero {
    background-image: url('<?= base_url('assets/img/bg-hero.png') ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    position: relative;
  }

  .mask {
    background: linear-gradient(180deg, rgba(169, 169, 169, 0.00) 0%, #004E8F 100%);
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
  }

  .section-hero .display-4 {
    font-size: 3rem;
  }

  .section-hero .btn-outline-light {
    border-color: #fff;
    color: #fff;
  }

  .section-hero .btn-outline-light:hover {
    background-color: #fff;
    color: #000;
  }

  @media (min-width: 768px) {
    .section-hero .display-4 {
      font-size: 4rem;
    }
  }

  @media (min-width: 992px) {
    .section-hero .display-4 {
      font-size: 5rem;
    }
  }

  @media (min-width: 1200px) {
    .section-hero .display-4 {
      font-size: 6rem;
    }
  }
</style>

<section class="section-hero py-5">
  <div class="mask bg-gradient-dark"></div>
  <div class="container-fluid d-flex align-items-center justify-content-center h-100 position-absolute top-0">
    <div class="row d-flex justify-content-center text-center">
      <div class="col-md-7 mb-5 pb-5">
        <h2 class="display-2 font-weight-bold text-white mb-2 mt-5 mt-md-0 mb-md-5 fw-semibold" style="font-family: 'Belleza', sans-serif;">Public Service,<br>Public Good</h2>
        <h5 class="text-white">Menjadi Pusat Pendidikan Vokasional dan Pengembangan IPTEK yang unggul di bidang kesehatan berbasis kearifan lokal tahun 2032</h5>
      </div>
    </div>
  </div>
</section>