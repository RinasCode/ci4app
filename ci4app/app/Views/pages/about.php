<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 fw-bold text-primary mb-4">About Me</h1>
            <p class="lead">Selamat datang di Komik Apps! Ini adalah aplikasi pengelolaan komik dan data pembeli. Temukan bagaimana aplikasi ini dikembangkan dan siapa yang ada di baliknya.</p>
        </div>
    </div>

    <hr class="my-5">

    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="/img/rina.jpg" alt="Rina" class="img-fluid rounded shadow-lg">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-secondary mb-3">Siapa Saya?</h2>
            <p class="text-muted">Saya Rina, pengembang aplikasi yang bersemangat dalam menciptakan solusi teknologi untuk kemudahan manajemen data. Komik Apps ini merupakan salah satu karya saya untuk membantu para pecinta komik dalam mengelola koleksi dan pembelian dengan mudah.</p>
            <p class="text-muted">Saya memiliki pengalaman dalam pengembangan aplikasi web dan mobile menggunakan teknologi modern seperti **React Native**, **Node.js**, dan **Supabase**.</p>
            <a href="/pages/contact" class="btn btn-primary btn-lg mt-3">Hubungi Saya</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
