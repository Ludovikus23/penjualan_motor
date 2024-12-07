<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="my-4">Laporan Penjualan</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Laporan</th>
                <th>Tanggal Laporan</th>
                <th>Total Pendapatan</th>
                <th>Total Motor Terjual</th>
                <th>Total Pelanggan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($laporan)): ?>
                <tr>
                    <td colspan="5" class="text-center">Tidak ada laporan tersedia.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($laporan as $item): ?>
                    <tr>
                        <td><?= $item['id_laporan']; ?></td>
                        <td><?= $item['tanggal_laporan']; ?></td>
                        <td><?= number_format($item['total_pendapatan'], 2, ',', '.'); ?></td>
                        <td><?= $item['total_motor_terjual']; ?></td>
                        <td><?= $item['total_pelanggan']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
