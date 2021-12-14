<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/komik/create/" class="btn btn-primary mt-3">Tambah Data Komik</a>
            <h1 class="mt-2">daftar komik</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">sampul</th>
                        <th scope="col">judul</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $row = 1; ?>
                    <?php foreach ($komik as $i) : ?>
                        <tr>
                            <th scope="row"><?= $row++; ?></th>
                            <td><img src="/img/<?= $i['sampul']; ?>" class="sampul" alt=""></td>
                            <td><?= $i['judul']; ?></td>
                            <td>
                                <a href="/komik/detail/<?= $i['slugh']; ?>" class="btn btn-success">detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>