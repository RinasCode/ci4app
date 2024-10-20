<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Add People</h1>
      <form action="/people" method="post">
      <div class="input-group mb-3">
        <input 
        type="text" 
        name="keyword"
        class="form-control" 
        placeholder="Masukan keyword pencarian">
        <button class="btn btn-secondary" type="submit" name="submit">Cari</button>
      </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (6 * ($currentPage - 1)); ?>
          <?php foreach ($people as $p) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $p['nama']; ?></td>
              <td><?= $p['alamat']; ?></td>
              <td>
                <a href="" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('people', 'people_pagination'); ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>