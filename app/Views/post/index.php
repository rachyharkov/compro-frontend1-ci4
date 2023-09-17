<?= $this->extend('layouts/guest_layout') ?>

<?= $this->section('content') ?>
    <div class="container pt-5 mt-5">
      <div class="row pt-5">
        <div class="col-md-8 mx-auto">
          <div class="row">
            <h1 class="text-start fw-semibold my-2">Semua Berita</h1>
            <hr style="height: 6px; background-color: #000; width: 100%; margin-bottom: 50px;">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="mx-auto" style="width: 920px; max-width: 90%;">
          <div class="row">
            <?php foreach ($posts as $key => $p) : ?>
              <div class="col-xs-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                <div class="card position-relative h-100 mx-auto" style="width: 18rem;">
                  <img src="<?= $p->image ?>" class="card-img-top" alt="..." style="height: 270px; object-fit: cover;">
                  <div class="badge bg-secondary position-absolute top-0 end-0 mt-3 me-3 p-2"><?= $p->content_type ?></div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $p->title ?></h5>
                    <a href="<?= base_url('posts/' . $p->slug) ?>" class="text-decoration-none text-dark" style="font-size: 14px;">Selengkapnya <i class="bi bi-chevron-right"></i></a>
                  </div>
                  <div class="card-footer d-flex flex-row justify-content-start align-items-center gap-2 bg-white">
                    <p class="card-text mb-0" style="font-size: 13px;"><small class="text-muted"><?= get_user($p->author)->name ?></small></p>•<p class="card-text mb-0" style="font-size: 13px;"><small class="text-muted"><?= date('d F Y', strtotime($p->created_at)) ?></small></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
<?= $this->endSection() ?>