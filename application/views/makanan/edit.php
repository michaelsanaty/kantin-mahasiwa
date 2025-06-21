<?php $this->load->view('layout/header'); ?>

<div class="container py-5">
  <!-- Heading + Back Button -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0 fw-semibold text-dark">Edit Menu Makanan</h2>
    <a href="<?= site_url('makanan') ?>" class="btn btn-light border shadow-sm px-3">
      <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
  </div>

  <!-- Form Card -->
  <div class="card border-0 shadow rounded-4 p-4">
    <?= form_open_multipart('makanan/update/' . $makanan->id) ?>
      <input type="hidden" name="gambar_lama" value="<?= $makanan->gambar ?>">

      <div class="mb-3">
        <label for="nama_makanan" class="form-label fw-semibold">Nama Makanan</label>
        <input type="text" name="nama_makanan" id="nama_makanan" required
               class="form-control rounded-3" value="<?= htmlspecialchars($makanan->nama_makanan) ?>">
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="4"
                  class="form-control rounded-3"><?= htmlspecialchars($makanan->deskripsi) ?></textarea>
      </div>

      <div class="mb-3">
        <label for="harga" class="form-label fw-semibold">Harga</label>
        <div class="input-group">
          <span class="input-group-text">Rp</span>
          <input type="number" name="harga" id="harga" required
                 class="form-control rounded-end" value="<?= $makanan->harga ?>">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Gambar Saat Ini</label><br>
        <?php if (!empty($makanan->gambar)): ?>
          <img src="<?= base_url('uploads/' . $makanan->gambar) ?>"
               alt="Gambar Makanan" width="220" class="img-thumbnail rounded shadow-sm">
        <?php else: ?>
          <p class="text-muted">Tidak ada gambar</p>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label for="gambar" class="form-label fw-semibold">Ganti Gambar (Opsional)</label>
        <input type="file" name="gambar" id="gambar" accept="image/*"
               class="form-control rounded-3">
      </div>

      <!-- Tombol -->
      <div class="d-flex justify-content-end gap-2 mt-4">
        <a href="<?= site_url('makanan') ?>" class="btn btn-outline-secondary px-4">Batal</a>
        <button type="submit" class="btn btn-primary px-4">Simpan</button>
      </div>
    <?= form_close() ?>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>
