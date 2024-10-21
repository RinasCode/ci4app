<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h1 class="display-4 fw-bold text-primary mb-4">Komik Apps by Rina</h1>
            <p class="lead">Komik Apps by Rina adalah aplikasi pengelolaan data komik dan data pembeli komik dengan mudah dan cepat. Temukan komik favorit Anda dan pantau transaksi pelanggan secara efektif!</p>
            <a  href="/komik" class="btn btn-primary btn-lg mt-3">Lihat Koleksi Komik</a>
        </div>
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-lg mb-4">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-secondary">Data Komik</h5>
                    <p class="card-text">Kelola dan update data komik terbaru dengan mudah. Tambahkan judul, penulis, dan genre untuk setiap komik.</p>
                    <a href="/komik" class="btn btn-outline-primary">Kelola Komik</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-lg mb-4">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-secondary">Data Pembeli</h5>
                    <p class="card-text">Pantau daftar pembeli komik dan histori transaksi mereka. Mudah dikelola untuk memastikan kepuasan pelanggan.</p>
                    <a href="/people" class="btn btn-outline-primary">Kelola Pembeli</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
