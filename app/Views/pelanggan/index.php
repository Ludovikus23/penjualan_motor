<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Daftar Pelanggan</h2>

    <a href="<?= base_url('pelanggan/create'); ?>" class="btn btn-primary mb-3">Tambah Pelanggan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Tanggal Daftar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($pelanggan)): ?>
                <tr>
                    <td colspan="7" class="text-center">Tidak ada pelanggan.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($pelanggan as $item): ?>
                    <tr>
                        <td><?= $item['id_pelanggan']; ?></td>
                        <td><?= $item['nama_pelanggan']; ?></td>
                        <td><?= $item['alamat_pelanggan']; ?></td>
                        <td><?= $item['telepon_pelanggan']; ?></td>
                        <td><?= $item['email_pelanggan']; ?></td>
                        <td><?= $item['tanggal_daftar']; ?></td>
                        <td>
                            <a href="<?= base_url('pelanggan/edit/'.$item['id_pelanggan']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('pelanggan/delete/'.$item['id_pelanggan']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
