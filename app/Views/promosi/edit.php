<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Edit Promosi</h2>

    <form action="<?= base_url('promosi/update/'.$promosi['id_promosi']); ?>" method="POST">
        <div class="mb-3">
            <label for="nama_promosi" class="form-label">Nama Promosi</label>
            <input type="text" class="form-control" id="nama_promosi" name="nama_promosi" value="<?= $promosi['nama_promosi']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_promosi" class="form-label">Deskripsi Promosi</label>
            <textarea class="form-control" id="deskripsi_promosi" name="deskripsi_promosi" required><?= $promosi['deskripsi_promosi']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?= $promosi['tanggal_mulai']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
            <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" value="<?= $promosi['tanggal_berakhir']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="diskon" class="form-label">Diskon (%)</label>
            <input type="number" class="form-control" id="diskon" name="diskon" value="<?= $promosi['diskon']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('promosi'); ?>" class="btn btn-secondary">Batal</a>

    </form>
</div>
<?= $this->endSection(); ?>
