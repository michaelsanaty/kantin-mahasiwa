<?php $this->load->view('layout/header'); ?>

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

    <a href="<?= site_url('makanan') ?>" class="btn btn-primary mt-3">Kembali ke Menu</a>
</div>

<?php $this->load->view('layout/footer'); ?>
