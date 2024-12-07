<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-4">Daftar Motor</h2>
    
    <!-- Tombol Tambah Data -->
    <a href="<?= base_url('motor/create'); ?>" class="btn btn-primary mb-3">Tambah Data Motor</a>

    <!-- Tabel Motor -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Motor</th>
                    <th>Nama Motor</th>
                    <th>Merk Motor</th>
                    <th>Tipe Motor</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($motor)): ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data motor.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($motor as $item): ?>
                        <tr>
                            <td><?= $item['id_motor']; ?></td>
                            <td><?= $item['nama_motor']; ?></td>
                            <td><?= $item['merk_motor']; ?></td>
                            <td><?= $item['tipe_motor']; ?></td>
                            <td><?= number_format($item['harga'], 2, ',', '.'); ?></td>
                            <td><?= $item['stok']; ?></td>
                            <td><?= $item['deskripsi']; ?></td>
                            <td>
                                <a href="<?= base_url('motor/edit/' . $item['id_motor']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?= base_url('motor/delete/' . $item['id_motor']); ?>" method="post" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>
