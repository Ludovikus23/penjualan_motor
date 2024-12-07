<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Edit Pembeli</h2>

    <form action="<?= base_url('pembeli/update/' . $pembeli['id_pembeli']); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="<?= old('nama_pembeli', $pembeli['nama_pembeli']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="alamat_pembeli" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat_pembeli" name="alamat_pembeli" value="<?= old('alamat_pembeli', $pembeli['alamat_pembeli']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="telepon_pembeli" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon_pembeli" name="telepon_pembeli" value="<?= old('telepon_pembeli', $pembeli['telepon_pembeli']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email_pembeli" class="form-label">Email</label>
            <input type="email" class="form-control" id="email_pembeli" name="email_pembeli" value="<?= old('email_pembeli', $pembeli['email_pembeli']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url(relativePath: 'pembeli'); ?>" class="btn btn-secondary">Batal</a>

    </form>
</div>
<?= $this->endSection(); ?>
