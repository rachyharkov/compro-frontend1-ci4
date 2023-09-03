<?= $this->extend('layouts/guest_layout') ?>

<?= $this->section('content') ?>
    <?= $this->include('home/partial/section_hero') ?>
    <div class="position-relative">
        <?= $this->include('home/partial/dot_slide_down') ?>
        <?= $this->include('home/partial/section_two') ?>
    </div>
    <?= $this->include('home/partial/section_three') ?>
    <?= $this->include('home/partial/section_four') ?>
    <?= $this->include('home/partial/section_five') ?>
    <?= $this->include('home/partial/section_footer_first') ?>
    <?= $this->include('home/partial/section_footer_second') ?>
<?= $this->endSection() ?>