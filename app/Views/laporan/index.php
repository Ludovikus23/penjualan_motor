<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Laporan Penjualan</h2>

    <a href="<?= base_url('laporan/create'); ?>" class="btn btn-primary mb-3">Tambah Laporan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Laporan</th>
                <th>Tanggal Laporan</th>
                <th>Total Pendapatan</th>
                <th>Total Motor Terjual</th>
                <th>Total Pelanggan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($laporan)): ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada laporan tersedia.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($laporan as $item): ?>
                    <tr>
                        <td><?= $item['id_laporan']; ?></td>
                        <td><?= $item['tanggal_laporan']; ?></td>
                        <td><?= number_format($item['total_pendapatan'], 2, ',', '.'); ?></td>
                        <td><?= $item['total_motor_terjual']; ?></td>
                        <td><?= $item['total_pelanggan']; ?></td>
                        <td>
                            <a href="<?= base_url('laporan/edit/' . $item['id_laporan']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('laporan/delete/' . $item['id_laporan']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
