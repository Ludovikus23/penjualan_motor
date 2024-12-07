<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="my-4">Detail Pesanan</h2>

    <?php if (isset($pesanan)): ?>
        <table class="table table-bordered">
            <tr>
                <th>ID Pesanan</th>
                <td><?= $pesanan['id_pesanan']; ?></td>
            </tr>
            <tr>
                <th>ID Pembeli</th>
                <td><?= $pesanan['id_pembeli']; ?></td>
            </tr>
            <tr>
                <th>ID Motor</th>
                <td><?= $pesanan['id_motor']; ?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td><?= $pesanan['jumlah']; ?></td>
            </tr>
            <tr>
                <th>Total Harga</th>
                <td><?= number_format($pesanan['total_harga'], 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Status Pesanan</th>
                <td><?= $pesanan['status_pesanan']; ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Pesanan tidak ditemukan.</p>
    <?php endif; ?>
</div>

</body>
</html>
