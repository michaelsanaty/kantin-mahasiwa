<?php $this->load->view('layout/header'); ?>

<div class="container py-5" style="background-color: #f8f3ef;">
    <h2 class="text-center mb-5 fw-bold" style="color: #333;">HIDANGAN UTAMA KANTIN MAHASISWA</h2>

    <!-- ✅ Pesan sukses -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success text-center">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <!-- ✅ Tombol tambah -->
    <div class="text-end mb-4">
        <a href="<?= site_url('makanan/create') ?>" class="btn btn-success">+ Tambah Makanan</a>
    </div>

    <!-- ✅ Galeri kartu makanan -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php if (!empty($makanan)): ?>
            <?php foreach ($makanan as $mkn): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">

                        <!-- ✅ Gambar makanan -->
                        <?php if (!empty($mkn->gambar)): ?>
                            <img src="<?= base_url('uploads/' . $mkn->gambar) ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="<?= htmlspecialchars($mkn->nama_makanan) ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/400x200?text=No+Image" class="card-img-top" alt="No Image Available">
                        <?php endif; ?>

                        <!-- ✅ Info makanan -->
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-capitalize"><?= htmlspecialchars($mkn->nama_makanan) ?></h5>
                            <p class="card-text small text-muted">Rp<?= number_format($mkn->harga, 0, ',', '.') ?></p>
                            <p class="card-text text-truncate" title="<?= htmlspecialchars($mkn->deskripsi) ?>">
                                <?= htmlspecialchars($mkn->deskripsi) ?>
                            </p>
                        </div>

                        <!-- ✅ Aksi -->
                        <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between">
                            <a href="<?= site_url('makanan/edit/' . $mkn->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('makanan/delete/' . $mkn->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info text-center">Belum ada data makanan.</div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
