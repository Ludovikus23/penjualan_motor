<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Tambah Pelanggan</h2>

    <form action="<?= base_url('pelanggan/store'); ?>" method="POST">
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
        </div>
        <div class="mb-3">
            <label for="alamat_pelanggan" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" required></textarea>
        </div>
        <div class="mb-3">
            <label for="telepon_pelanggan" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon_pelanggan" name="telepon_pelanggan" required>
        </div>
        <div class="mb-3">
            <label for="email_pelanggan" class="form-label">Email</label>
            <input type="email" class="form-control" id="email_pelanggan" name="email_pelanggan" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
            <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>
