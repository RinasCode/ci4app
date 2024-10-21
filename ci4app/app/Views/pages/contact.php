<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 fw-bold text-primary mb-4">Contact Us</h1>
            <p class="lead">Hubungi kami di kantor atau cabang terdekat. Kami selalu siap melayani Anda!</p>
        </div>
    </div>

    <div class="row">
        <?php 
        // Data fake untuk alamat
        $alamat = [
            ['tipe' => 'Kantor Pusat', 'alamat' => 'Jl. Sudirman No. 45', 'kota' => 'Jakarta'],
            ['tipe' => 'Cabang Surabaya', 'alamat' => 'Jl. Tunjungan No. 12', 'kota' => 'Surabaya'],
            ['tipe' => 'Cabang Bandung', 'alamat' => 'Jl. Braga No. 8', 'kota' => 'Bandung']
        ];
        ?>
        
        <?php foreach ($alamat as $a) : ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-secondary fw-bold">
                        <i class="bi bi-geo-alt-fill text-danger"></i> <?= $a['tipe']; ?>
                    </h5>
                    <p class="card-text">
                        <strong>Alamat:</strong> <?= $a['alamat']; ?><br>
                        <strong>Kota:</strong> <?= $a['kota']; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
