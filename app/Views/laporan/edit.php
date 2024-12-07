<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Edit Laporan Penjualan</h2>

    <form action="<?= base_url('laporan/update/' . $laporan['id_laporan']); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" class="form-control" value="<?= $laporan['tanggal_laporan']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="total_pendapatan" class="form-label">Total Pendapatan</label>
            <input type="number" name="total_pendapatan" class="form-control" value="<?= $laporan['total_pendapatan']; ?>" required step="0.01">
        </div>

        <div class="mb-3">
            <label for="total_motor_terjual" class="form-label">Total Motor Terjual</label>
            <input type="number" name="total_motor_terjual" class="form-control" value="<?= $laporan['total_motor_terjual']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="total_pelanggan" class="form-label">Total Pelanggan</label>
            <input type="number" name="total_pelanggan" class="form-control" value="<?= $laporan['total_pelanggan']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
<?= $this->endSection(); ?>
