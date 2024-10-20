<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Form Tambah Data Komik</h2>
            <?= session()->get('validation') ? session()->get('validation')->getError('sampul') : ''; ?>

            <form action="/komik/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                
                <!-- Judul -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control <?= session()->get('validation') && session()->get('validation')->hasError('judul') ? 'is-invalid' : ''; ?>"
                            id="judul"
                            name="judul"
                            value="<?= old('judul'); ?>"
                            autofocus>
                        <div class="invalid-feedback">
                            <?= session()->get('validation') ? session()->get('validation')->getError('judul') : ''; ?>
                        </div>
                    </div>
                </div>

                <!-- Penulis -->
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control <?= session()->get('validation') && session()->get('validation')->hasError('penulis') ? 'is-invalid' : ''; ?>"
                            id="penulis"
                            name="penulis"
                            value="<?= old('penulis'); ?>">
                        <div class="invalid-feedback">
                            <?= session()->get('validation') ? session()->get('validation')->getError('penulis') : ''; ?>
                        </div>
                    </div>
                </div>

                <!-- Penerbit -->
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control <?= session()->get('validation') && session()->get('validation')->hasError('penerbit') ? 'is-invalid' : ''; ?>"
                            id="penerbit"
                            name="penerbit"
                            value="<?= old('penerbit'); ?>">
                        <div class="invalid-feedback">
                            <?= session()->get('validation') ? session()->get('validation')->getError('penerbit') : ''; ?>
                        </div>
                    </div>
                </div>

                <!-- Sampul -->
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumnail img-preview" alt="Preview Gambar">
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

                <!-- Button -->
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
