<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kantin Mahasiswa - Daftar Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .card-title {
            font-weight: bold;
        }
        .card {
            border: none;
            border-radius: 16px;
        }
        .btn-order {
            background-color: #bfa77f;
            border: none;
        }
        .btn-order:hover {
            background-color: #a8936f;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Hidangan Kantin Mahasiswa</h2>

        <div class="text-end mb-3">
            <a href="<?= site_url('makanan/create') ?>" class="btn btn-success">+ Tambah Makanan</a>
        </div>

        <div class="row">
            <?php if (empty($makanan)) : ?>
                <div class="col-12">
                    <div class="alert alert-warning text-center">Belum ada data makanan.</div>
                </div>
            <?php else : ?>
                <?php foreach ($makanan as $m) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title"><?= htmlspecialchars($m->nama) ?></h5>
                                    <p class="card-text"><?= nl2br(htmlspecialchars($m->deskripsi)) ?></p>
                                    <h6 class="text-muted">Rp <?= number_format($m->harga, 0, ',', '.') ?></h6>
                                </div>
                                <div class="mt-3 d-flex justify-content-between">
                                    <a href="<?= site_url('makanan/edit/'.$m->id) ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="<?= site_url('makanan/delete/'.$m->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                    <a href="#" class="btn btn-sm btn-order">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
