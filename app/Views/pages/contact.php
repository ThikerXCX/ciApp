<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>contact me</h1>
            <?php foreach ($alamat as $a) { ?>
                <ul>
                    <li><?= $a['bentuk']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>