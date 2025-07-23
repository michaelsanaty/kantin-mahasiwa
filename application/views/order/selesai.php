<!-- pembayaran_berhasil.php -->

<div class="container py-5 text-center">
    <h2 class="fw-bold mb-4">✅ Pembayaran Berhasil</h2>

    <p class="mb-3">Terima kasih, <strong><?= htmlspecialchars($order->nama_pemesan) ?></strong>!</p>
    <p>Pesanan <strong><?= htmlspecialchars($order->nama_makanan) ?></strong> sejumlah <strong><?= $order->jumlah ?></strong> telah dibayar via <strong><?= $order->metode_pembayaran ?></strong>.</p>
    <p>Total yang dibayar: <strong>Rp<?= number_format($order->total, 0, ',', '.') ?></strong></p>

    <?php if ($order->metode_pembayaran === 'QRIS'): ?>
        <div class="my-4">
            <img src="<?= base_url('assets/img/qris.png') ?>" alt="QRIS" width="200">
            <p class="mt-2 text-muted small">Pembayaran via QRIS berhasil diproses.</p>
        </div>
    <?php elseif ($order->metode_pembayaran === 'Transfer Bank'): ?>
        <div class="alert alert-info mt-4">
            Transfer telah diterima. Terima kasih atas pembayaran Anda.
        </div>
    <?php else: ?>
        <div class="alert alert-success mt-4">
            Tunai diterima. Struk pembayaran dicetak.
        </div>
    <?php endif; ?>

    <!-- STRUK CETAK -->
    <div class="card shadow mt-5 mx-auto p-4" style="max-width: 380px; font-family: 'Courier New', monospace; border: 1px dashed #999;" id="receipt">
        <div class="text-center mb-2">
            <h5 class="fw-bold mb-0">KANTIN MAHASISWA</h5>
            <small class="text-muted">Universitas Contoh</small>
            <div style="border-top: 1px dashed #999; margin: 8px 0;"></div>
            <small><?= date('d/m/Y H:i:s') ?></small>
        </div>

        <div class="mb-2">
            <div class="d-flex justify-content-between">
                <span>No. Pesanan</span>
                <span><strong><?= $order->id ?></strong></span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Pemesan</span>
                <span><?= htmlspecialchars($order->nama_pemesan) ?></span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Menu</span>
                <span><?= htmlspecialchars($order->nama_makanan) ?></span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Jumlah</span>
                <span><?= $order->jumlah ?></span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Metode</span>
                <span><?= $order->metode_pembayaran ?></span>
            </div>
        </div>

        <div style="border-top: 1px dashed #999; margin: 10px 0;"></div>

        <div class="d-flex justify-content-between mb-2">
            <strong>Total</strong>
            <strong>Rp<?= number_format($order->total, 0, ',', '.') ?></strong>
        </div>

        <div class="text-center mt-3">
            <small>Terima kasih atas kunjungan Anda!</small><br>
            <small>~ Selamat Menikmati ~</small>
        </div>
    </div>

    <!-- Tombol Cetak -->
    <div class="text-center mt-3">
        <button onclick="printDiv('receipt')" class="btn btn-outline-dark btn-sm">
            <i class="bi bi-printer"></i> Cetak Struk
        </button>
    </div>

    <!-- Tombol Kembali -->
    <a href="<?= site_url('makanan') ?>" class="btn btn-primary mt-4">Kembali ke Menu</a>
</div>

<!-- Script Print -->
<script>
function printDiv(divId) {
    var printContents = document.getElementById(divId).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    location.reload();
}
</script>
