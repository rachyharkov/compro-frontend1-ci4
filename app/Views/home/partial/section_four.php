<section class="py-5 my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-11 mx-auto">
        <h1 class="text-start fw-semibold my-2">Berita</h1>
        <p class="text-start mb-5 pb-5" style="font-size: 1.50rem;">Update terbaru dari kampus</p>
        <div class="row mt-5">
          <?php if (empty($top_3_post)) : ?>
            <div class="col-md-12">
              <i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 5rem;"></i>
              <h3 class="text-start">Kami akan segera mengupdate berita terbaru</h3>
            </div>
          <?php endif; ?>
          <?php foreach ($top_3_post as $i => $post) : ?>
            <div class="col-sm-12 col-md-6 col-xl-4 <?= $i == 0 ? 'd-none d-md-block' : '' ?>">
              <div class="card mb-3 border-0">
                <div class="card-body px-0">
                  <a href="<?= base_url('posts/' . $post->slug) ?>" class="text-decoration-none text-dark link-feature">
                    <img src="<?= $post->image ?>" class="img-fluid rounded-0 w-100" style="height: 300px; object-fit: cover;" alt="Artikel <?= $post->title ?>">
                    <h5 class="card-title my-3"><?= $post->content_type ?> - <span class="text-muted small"><?= $post->title ?></span></h5>
                  </a>
                  <p class="card-text mb-0">This is a wider card with supporting text below as a natural lead-in to additional content.</p>                
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="d-flex flex-row justify-content-end mt-5">
          <a href="<?= base_url('posts') ?>" class="btn btn-outline-dark btn-lg rounded-0" role="button">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>