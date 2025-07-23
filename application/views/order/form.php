<style>
    .order-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 600px;
        margin: 40px auto;
        transition: all 0.3s ease-in-out;
    }

    .order-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .order-card h3 {
        font-weight: 700;
        margin-bottom: 25px;
        text-align: center;
    }

    .order-card .form-control {
        border-radius: 12px;
        padding: 10px 15px;
    }

    .order-card .btn {
        border-radius: 12px;
        padding: 10px 20px;
    }

    .form-label {
        font-weight: 500;
    }
</style>

<div class="order-card">
  <h3>🧾 Formulir Pemesanan</h3>

  <form method="post" action="<?= site_url('makanan/proses_order') ?>">
    <input type="hidden" name="makanan_id" value="<?= $makanan->id ?>">
    <input type="hidden" name="harga" id="harga" value="<?= $makanan->harga ?>">
    <input type="hidden" name="total_harga" id="total_harga">

    <!-- Nama Makanan -->
    <div class="mb-3">
      <label class="form-label">Nama Makanan</label>
      <input type="text" class="form-control bg-light" value="<?= $makanan->nama_makanan ?>" readonly>
    </div>

    <!-- Harga Satuan -->
    <div class="mb-3">
      <label class="form-label">Harga (per porsi)</label>
      <input type="text" id="harga_format" class="form-control bg-light" value="Rp<?= number_format($makanan->harga, 0, ',', '.') ?>" readonly>
    </div>

    <!-- Nama Pemesan -->
    <div class="mb-3">
      <label class="form-label">Nama Pemesan</label>
      <input type="text" name="nama_pemesan" class="form-control" placeholder="Contoh: Budi" required>
    </div>

    <!-- Jumlah -->
    <div class="mb-3">
      <label class="form-label">Jumlah</label>
      <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1" required>
    </div>

    <!-- Total Harga -->
    <div class="mb-3">
      <label class="form-label">Total Harga</label>
      <input type="text" id="total_harga_display" class="form-control bg-light" readonly>
    </div>

    <!-- Catatan -->
    <div class="mb-3">
      <label class="form-label">Catatan (opsional)</label>
      <textarea name="catatan" class="form-control" placeholder="Contoh: Pedas sedikit, tanpa saus."></textarea>
    </div>

    <!-- Tombol -->
    <div class="d-flex justify-content-between">
      <a href="<?= site_url('makanan') ?>" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-primary">Lanjut ke Pembayaran</button>
    </div>
  </form>
</div>

<script>
  function updateTotal() {
    const harga = parseInt(document.getElementById("harga").value);
    const jumlah = parseInt(document.getElementById("jumlah").value);
    const total = harga * jumlah;

    document.getElementById("total_harga_display").value = "Rp" + total.toLocaleString('id-ID');
    document.getElementById("total_harga").value = total;
  }

  document.getElementById("jumlah").addEventListener("input", updateTotal);
  window.addEventListener("load", updateTotal);
</script>
