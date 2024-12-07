<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <h2 class="my-4 text-center">Daftar Promosi</h2>

    <a href="<?= base_url('promosi/create'); ?>" class="btn btn-primary mb-3">Tambah Promosi</a>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Promosi</th>
                    <th>Nama Promosi</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Berakhir</th>
                    <th>Diskon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($promosi)): ?>
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada promosi.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($promosi as $item): ?>
                        <tr>
                            <td><?= $item['id_promosi']; ?></td>
                            <td><?= $item['nama_promosi']; ?></td>
                            <td><?= $item['deskripsi_promosi']; ?></td>
                            <td><?= date('d-m-Y', strtotime($item['tanggal_mulai'])); ?></td>
                            <td><?= date('d-m-Y', strtotime($item['tanggal_berakhir'])); ?></td>
                            <td><?= $item['diskon']; ?>%</td>
                            <td>
                                <a href="<?= base_url('promosi/edit/'.$item['id_promosi']); ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <!-- Button to trigger modal -->
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $item['id_promosi']; ?>">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal<?= $item['id_promosi']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus promosi ini? Tindakan ini tidak dapat dibatalkan.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('promosi/delete/'.$item['id_promosi']); ?>" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Include jQuery, Bootstrap JS, and FontAwesome (if not already included in your layout) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<?= $this->endSection(); ?>
