<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Tambah Pembeli</h2>

    <form action="<?= base_url('pembeli/store'); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" required>
        </div>

        <div class="mb-3">
            <label for="alamat_pembeli" class="form-label">Alamat Pembeli</label>
            <textarea class="form-control" id="alamat_pembeli" name="alamat_pembeli" required></textarea>
        </div>

        <div class="mb-3">
            <label for="telepon_pembeli" class="form-label">Telepon Pembeli</label>
            <input type="text" class="form-control" id="telepon_pembeli" name="telepon_pembeli" required>
        </div>

        <div class="mb-3">
            <label for="email_pembeli" class="form-label">Email Pembeli</label>
            <input type="email" class="form-control" id="email_pembeli" name="email_pembeli" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>
