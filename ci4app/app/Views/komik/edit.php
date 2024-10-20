<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php $validation = session()->get('validation'); ?>
            <h2>Form Edit Data Komik</h2>
            <form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>" >
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control <?= ($validation && $validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
                            id="judul"
                            name="judul"
                            value="<?= (old('judul')) ? old('judul') : $komik['judul']; ?>"
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
                            value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
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
                            value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
                        <div
                            class="invalid-feedback">
                            <?= ($validation) ? $validation->getError('penerbit') : ''; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $komik['sampul'];?>" class="img-thumnail img-preview" alt="Preview Gambar">
                    </div>
                    <div class="col-sm-8">
                        <input
                            class="form-control <?= session()->get('validation') && session()->get('validation')->hasError('sampul') ? 'is-invalid' : ''; ?>"
                            type="file"
                            id="sampul"
                            name="sampul"
                            onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= session()->get('validation') ? session()->get('validation')->getError('sampul') : ''; ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>