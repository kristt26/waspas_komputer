<?= $this->extend('layout/home') ?>
<?= $this->section('content') ?>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="our_products">
                    <div class="row">
                        <?php foreach ($data as $key => $value) : ?>
                            <div class="col-md-4 margin_bottom1">
                                <div class="product_box">
                                    <figure><img src="<?= base_url() ?>assets/berkas/<?= $value->file ?>" alt="#" width="100%" height="150px" /></figure>
                                    <h3><?= $value->merk ?></h3>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>