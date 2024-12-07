<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="my-4">Pelanggan</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Tipe Pelanggan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($pelanggan)): ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data pelanggan.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($pelanggan as $item): ?>
                    <tr>
                        <td><?= $item['id_pelanggan']; ?></td>
                        <td><?= $item['nama_pelanggan']; ?></td>
                        <td><?= $item['alamat_pelanggan']; ?></td>
                        <td><?= $item['telepon_pelanggan']; ?></td>
                        <td><?= $item['email_pelanggan']; ?></td>
                        <td><?= $item['tipe_pelanggan']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
