<style>
    .payment-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 600px;
        margin: 40px auto;
        transition: all 0.3s ease-in-out;
    }

    .payment-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .payment-card h3 {
        font-weight: 700;
        margin-bottom: 25px;
        text-align: center;
    }

    .payment-card .form-control {
        border-radius: 12px;
        padding: 10px 15px;
    }

    .payment-card .btn {
        border-radius: 12px;
        padding: 10px 20px;
    }

    .form-label {
        font-weight: 500;
    }

    .metode-detail {
        margin-top: 15px;
        display: none;
    }

    .qr-image {
        width: 100%;
        max-width: 250px;
        display: block;
        margin: 10px auto;
    }

    .rekening-box {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #ddd;
    }

</style>

<div class="payment-card">
  <h3>💳 Pembayaran</h3>

  <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success text-center">
      <?= $this->session->flashdata('success') ?>
    </div>
  <?php endif; ?>

  <form action="<?= site_url('makanan/selesai_pembayaran') ?>" method="post">
    <input type="hidden" name="order_id" value="<?= $order->id ?>">

    <div class="mb-3">
      <label class="form-label">Nama Pemesan</label>
      <input type="text" class="form-control bg-light" value="<?= $order->nama_pemesan ?>" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">Nama Makanan</label>
      <input type="text" class="form-control bg-light" value="<?= $order->nama_makanan ?>" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">Jumlah</label>
      <input type="text" class="form-control bg-light" value="<?= $order->jumlah ?>" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">Total Harga</label>
      <input type="text" class="form-control bg-light" value="Rp<?= number_format($order->total, 0, ',', '.') ?>" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">Pilih Metode Pembayaran</label>
      <select name="metode" id="metode_pembayaran" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="Tunai">Tunai</option>
        <option value="Transfer Bank">Transfer Bank</option>
        <option value="QRIS">QRIS</option>
      </select>
    </div>

    <!-- Tambahan tampilan metode -->
    <div id="metode_detail_qris" class="metode-detail text-center">
      <img src="<?= base_url('uploads/qris_sample.png') ?>" alt="QRIS Code" class="qr-image">
      <p class="text-muted">Scan QR untuk melakukan pembayaran via QRIS.</p>
    </div>

    <div id="metode_detail_transfer" class="metode-detail">
      <div class="rekening-box">
        <strong>Transfer ke Rekening:</strong><br>
        BRI - 1234 5678 9012<br>
        a.n. Kantin Mahasiswa
      </div>
    </div>

    <div id="metode_detail_tunai" class="metode-detail text-success text-center fw-bold">
      Silakan lanjutkan ke kasir untuk pembayaran tunai.
    </div>

    <div class="d-flex justify-content-between mt-4">
      <a href="<?= site_url('makanan') ?>" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-success">Selesai</button>
    </div>
  </form>
</div>

<script>
  const metode = document.getElementById('metode_pembayaran');
  const qris = document.getElementById('metode_detail_qris');
  const transfer = document.getElementById('metode_detail_transfer');
  const tunai = document.getElementById('metode_detail_tunai');

  metode.addEventListener('change', function () {
    qris.style.display = 'none';
    transfer.style.display = 'none';
    tunai.style.display = 'none';

    if (this.value === 'QRIS') {
      qris.style.display = 'block';
    } else if (this.value === 'Transfer Bank') {
      transfer.style.display = 'block';
    } else if (this.value === 'Tunai') {
      tunai.style.display = 'block';
    }
  });
</script>

