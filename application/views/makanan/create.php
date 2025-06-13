<?php $this->load->view('layout/header'); ?>

<h4>➕ Tambah Makanan</h4>

<form action="<?= site_url('makanan/store') ?>" method="post" class="mt-3">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Makanan</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" required>
    </div>
    <a href="<?= site_url('makanan') ?>" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php $this->load->view('layout/footer'); ?>