<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Daftar Pesanan</h2>

    <a href="<?= base_url('pesanan/create'); ?>" class="btn btn-primary mb-3">Tambah Pesanan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>ID Pembeli</th>
                <th>ID Motor</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Status Pesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($pesanan)): ?>
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data pesanan.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($pesanan as $item): ?>
                    <tr>
                        <td><?= $item['id_pesanan']; ?></td>
                        <td><?= $item['id_pembeli']; ?></td>
                        <td><?= $item['id_motor']; ?></td>
                        <td><?= $item['jumlah']; ?></td>
                        <td><?= number_format($item['total_harga'], 2, ',', '.'); ?></td>
                        <td><?= $item['status_pesanan']; ?></td>
                        <td>
                            <a href="<?= base_url('pesanan/edit/' . $item['id_pesanan']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('pesanan/delete/' . $item['id_pesanan']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
