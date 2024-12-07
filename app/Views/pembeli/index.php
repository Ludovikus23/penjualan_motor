<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Daftar Pembeli</h2>

    <a href="<?= base_url('pembeli/create'); ?>" class="btn btn-primary mb-3">Tambah Pembeli</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th> <!-- Kolom aksi untuk tombol Edit dan Delete -->
            </tr>
        </thead>
        <tbody>
            <?php if (empty($pembeli)): ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data pembeli.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($pembeli as $item): ?>
                    <tr>
                        <td><?= $item['id_pembeli']; ?></td>
                        <td><?= $item['nama_pembeli']; ?></td>
                        <td><?= $item['alamat_pembeli']; ?></td>
                        <td><?= $item['telepon_pembeli']; ?></td>
                        <td><?= $item['email_pembeli']; ?></td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="<?= base_url('pembeli/edit/' . $item['id_pembeli']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Tombol Hapus (menggunakan konfirmasi untuk menghapus) -->
                            <a href="<?= base_url('pembeli/delete/' . $item['id_pembeli']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pembeli ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
