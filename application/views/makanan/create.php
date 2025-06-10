<!DOCTYPE html>
<html>
<head>
    <title>Tambah Makanan</title>
</head>
<body>
    <h2>Tambah Makanan</h2>
    <form action="<?= site_url('makanan/store') ?>" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        <label>Harga:</label><br>
        <input type="number" name="harga" required><br>
        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>