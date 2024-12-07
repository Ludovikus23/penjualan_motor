<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Tambah Pesanan</h2>

    <form action="<?= base_url('pesanan/store'); ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="id_pembeli" class="form-label">ID Pembeli</label>
            <input type="text" class="form-control" id="id_pembeli" name="id_pembeli" required>
        </div>
        <div class="mb-3">
            <label for="id_motor" class="form-label">ID Motor</label>
            <input type="text" class="form-control" id="id_motor" name="id_motor" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="mb-3">
            <label for="total_harga" class="form-label">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" required>
        </div>
        <div class="mb-3">
            <label for="status_pesanan" class="form-label">Status Pesanan</label>
            <input type="text" class="form-control" id="status_pesanan" name="status_pesanan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url(relativePath: 'pesanan'); ?>" class="btn btn-secondary">Batal</a>

    </form>
</div>
<?= $this->endSection(); ?>
