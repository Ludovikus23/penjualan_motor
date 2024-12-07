<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Edit Pelanggan</h2>

    <form action="<?= base_url('pelanggan/update/'.$pelanggan['id_pelanggan']); ?>" method="POST">
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat_pelanggan" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" required><?= $pelanggan['alamat_pelanggan']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="telepon_pelanggan" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon_pelanggan" name="telepon_pelanggan" value="<?= $pelanggan['telepon_pelanggan']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email_pelanggan" class="form-label">Email</label>
            <input type="email" class="form-control" id="email_pelanggan" name="email_pelanggan" value="<?= $pelanggan['email_pelanggan']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
            <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar" value="<?= $pelanggan['tanggal_daftar']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection(); ?>
