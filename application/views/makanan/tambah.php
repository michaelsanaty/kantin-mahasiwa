<div class="container mt-4">
    <h2>Tambah Makanan</h2>

    <!-- ✅ Tampilkan pesan error upload jika ada -->
    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('makanan/store') ?>" method="post" enctype="multipart/form-data">
        <!-- Nama Makanan -->
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>

        <!-- Harga -->
        <div class="mb-3">
            <label for="harga" class="form-label">Harga (Rp)</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <!-- Jenis Makanan -->
        <div class="mb-3">
            <label for="jenis_makanan" class="form-label">Jenis Makanan</label>
            <select class="form-control" id="jenis_makanan" name="jenis_makanan" required>
                <option value="">-- Pilih Jenis --</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
            </select>
        </div>

        <!-- Upload Gambar -->
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Makanan</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= site_url('makanan') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
