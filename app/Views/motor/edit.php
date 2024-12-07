<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <h2>Edit Data Motor</h2>
    <form action="<?= base_url('motor/update/' . $motor['id_motor']) ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="nama_motor" class="form-label">Nama Motor</label>
            <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="<?= $motor['nama_motor'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="merk_motor" class="form-label">Merk Motor</label>
            <input type="text" class="form-control" id="merk_motor" name="merk_motor" value="<?= $motor['merk_motor'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tipe_motor" class="form-label">Tipe Motor</label>
            <input type="text" class="form-control" id="tipe_motor" name="tipe_motor" value="<?= $motor['tipe_motor'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $motor['harga'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?= $motor['stok'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= $motor['deskripsi'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('motor') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection(); ?>
