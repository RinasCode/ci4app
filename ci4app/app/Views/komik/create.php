<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php $validation = session()->get('validation'); ?>
            <h2>Form Tambah Data Komik</h2>
            <form action="/komik/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control <?= ($validation && $validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
                            id="judul"
                            name="judul"
                            value="<?= old('judul'); ?>"
                            autofocus>
                        <div
                            class="invalid-feedback">
                            <?= ($validation) ? $validation->getError('judul') : ''; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control <?= ($validation && $validation->hasError('penulis')) ? 'is-invalid' : ''; ?>"
                            id="penulis"
                            name="penulis"
                            value="<?= old('penulis') ?>">
                        <div
                            class="invalid-feedback">
                            <?= ($validation) ? $validation->getError('penulis') : ''; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control <?= ($validation && $validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>"
                            id="penerbit"
                            name="penerbit"
                            value="<?= old('penerbit') ?>">
                        <div
                            class="invalid-feedback">
                            <?= ($validation) ? $validation->getError('penerbit') : ''; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>