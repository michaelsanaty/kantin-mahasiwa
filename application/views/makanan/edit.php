<!DOCTYPE html>
<html>
<head>
    <title>Edit Makanan</title>
</head>
<body>
    <h2>Edit Makanan</h2>
    <form action="<?= site_url('makanan/update/'.$makanan->id) ?>" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $makanan->nama ?>" required><br>
        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?= $makanan->harga ?>" required><br>
        <label>Stok:</label><br>
        <input type="number" name="stok" value="<?= $makanan->stok ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>