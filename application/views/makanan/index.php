<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Galeri Makanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background: #f5f6fa;
        font-family: 'Segoe UI', sans-serif;
    }

    .menu-title {
        font-size: 2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .shadow-3d {
        transition: all 0.3s ease-in-out;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        border-radius: 16px;
    }

    .shadow-3d:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 40px rgba(0, 0, 0, 0.2);
    }

    .btn-sm {
        font-size: 0.8rem;
    }

    .card-img-top {
        height: 220px;
        object-fit: cover;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .card-body {
        display: flex;
        flex-direction: column;
    }
  </style>
</head>
<body>

<div class="container py-5">

    <!-- Judul Halaman -->
    <h2 class="menu-title text-center">Hidangan Kantin Mahasiswa</h2>

    <!-- Tombol Tambah -->
    <div class="text-end mb-4">
        <a href="<?= site_url('makanan/create') ?>" class="btn btn-success shadow-sm px-4 rounded-pill">+ Tambah Makanan</a>
    </div>


    <!-- Galeri Makanan -->
    <div class="row g-4">
        <?php if (empty($makanan)) : ?>
            <div class="col-12">
                <div class="alert alert-warning text-center shadow-sm">Belum ada data makanan.</div>
            </div>
        <?php else : ?>
            <?php foreach ($makanan as $m) : ?>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-3d h-100 border-0 overflow-hidden">
                        <img src="<?= base_url('uploads/' . $m->gambar) ?>" class="card-img-top" alt="<?= htmlspecialchars($m->nama_makanan) ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($m->nama_makanan) ?></h5>
                            <p class="card-text text-muted small"><?= nl2br(htmlspecialchars($m->deskripsi)) ?></p>

                            <div class="mt-auto">
                                <p class="fw-bold text-success">Rp <?= number_format($m->harga, 0, ',', '.') ?></p>

                                <div class="d-flex justify-content-between">
                                    <a href="<?= site_url('makanan/edit/' . $m->id) ?>" class="btn btn-outline-primary btn-sm rounded-pill">Edit</a>
                                    <a href="<?= site_url('makanan/delete/' . $m->id) ?>" class="btn btn-outline-danger btn-sm rounded-pill" onclick="return confirm('Hapus makanan ini?')">Hapus</a>
                                    <a href="<?= site_url('makanan/order/' . $m->id) ?>" class="btn btn-outline-success btn-sm rounded-pill">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
