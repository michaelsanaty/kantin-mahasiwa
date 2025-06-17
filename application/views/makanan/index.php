<div class="container-menu">
    <h2 class="menu-title">Hidangan Kantin Mahasiswa</h2>

    <!-- Tombol Tambah Makanan -->
    <div class="text-end mb-4">
        <a href="<?= site_url('makanan/create') ?>" class="btn btn-success shadow-sm px-4">+ Tambah Makanan</a>
    </div>

    <!-- Galeri Makanan -->
    <div class="menu-grid">
        <?php if (empty($makanan)) : ?>
            <div class="col-12">
                <div class="alert alert-warning text-center shadow-sm">Belum ada data makanan.</div>
            </div>
        <?php else : ?>
            <?php foreach ($makanan as $m) : ?>
                <div class="menu-card">
                    <!-- Gambar Makanan -->
                    <img src="<?= base_url('uploads/' . $m->gambar) ?>" alt="<?= htmlspecialchars($m->nama_makanan) ?>">

                    <div class="p-3 d-flex flex-column flex-grow-1">
                        <!-- Nama & Deskripsi -->
                        <h3><?= htmlspecialchars($m->nama_makanan) ?></h3>
                        <p><?= nl2br(htmlspecialchars($m->deskripsi)) ?></p>

                        <!-- Harga dan Tombol CRUD -->
                        <div class="price-order mt-auto">
                            <span class="price">Rp <?= number_format($m->harga, 0, ',', '.') ?></span>

                            <div class="d-flex justify-content-between mt-2">
                                <a href="<?= site_url('makanan/edit/' . $m->id) ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="<?= site_url('makanan/delete/' . $m->id) ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus makanan ini?')">Hapus</a>
                                <a href="<?= site_url('makanan/order/' . $m->id) ?>" class="btn btn-sm btn-outline-success">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
