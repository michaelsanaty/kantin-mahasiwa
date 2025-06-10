<!DOCTYPE html>
<html>
<head>
    <title>Daftar Makanan</title>
</head>
<body>
    <h2>Daftar Makanan</h2>
    <a href="<?= site_url('makanan/create') ?>">Tambah Makanan</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($makanan as $mkn): ?>
        <tr>
            <td><?= $mkn->nama ?></td>
            <td><?= $mkn->harga ?></td>
            <td><?= $mkn->stok ?></td>
            <td>
                <a href="<?= site_url('makanan/edit/'.$mkn->id) ?>">Edit</a> |
                <a href="<?= site_url('makanan/delete/'.$mkn->id) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
