<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Komik</h2>
            <form action="/komik/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" value="<?= old('juduk'); ?>" class="form-control <?= ($validation->hasError('judul')) ? ' is-invalid' : ''; ?>" id="judul" autofocus>
                    </div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">penulis</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('penulis'); ?>" name="penulis" class="form-control" id="penulis">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('penerbit'); ?>" name="penerbit" class="form-control" id="penerbit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('sampul'); ?>" name="sampul" class="form-control" id="sampul">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Datas</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>