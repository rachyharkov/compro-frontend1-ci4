<?= $this->extend('layouts/article_show_layout') ?>

<?= $this->section('content') ?>
  <style>
    .article-bg-cover {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 400px;
      overflow: hidden;
    }

    .article-bg-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 400px;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .badge-outline-secondary {
      border: 1px solid #6c757d;
      color: #6c757d;
    }
  </style>
  <div class="d-flex flex-column">
    <div class="container-fluid" style="background-color: #F3F1F1;">
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="text-center text-white py-5">
            <h1 class="fw-bold fs-4 mb-3" style="color: #004E8F;"><?= $post->content_type ?></h1>
            <h1 class="text-secondary fw-bold mb-3"><?= $post->title ?></h1>
            <p class="text-secondary lead mb-5" style="font-size: 16px;">Dipublikasi pada <span class="fw-bold"><?= date('d F Y', strtotime($post->created_at))?></span> oleh <span class="fw-bold"><?= get_user($post->author)->name ?></span></p>
            <div class="mt-4">
              <?php foreach ($post->category as $category) : ?>
                <a href="<?= base_url('category/' . $category->slug) ?>" class="badge badge-outline-secondary text-decoration-none"><?= $category->name ?></a>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="text-center" style="margin-bottom: -5rem;">
            <img src="<?= $post->image ?>" class="img-fluid rounded-0 w-100" style="height: 500px; object-fit: contain;" alt="Artikel <?= $post->title ?>">
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row mt-5 py-5">
        <div class="col-md-6 mt-4 mx-auto">
            <?= $post->content ?>
        </div>
      </div>
    </div>
  </div>
  <?= $this->include('post/include/related_article') ?>
  <?= $this->include('home/partial/section_footer_first') ?>
  <?= $this->include('home/partial/section_footer_second') ?>
<?= $this->endSection() ?>