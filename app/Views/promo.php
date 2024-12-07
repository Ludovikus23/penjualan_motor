<!-- app/Views/promo.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Motor</title>
    <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <h1 class="my-5">Promo Motor Terbaru</h1>

        <?php if (empty($promos)): ?>
            <p>Belum ada promo saat ini.</p>
        <?php else: ?>
            <div class="row">
                <?php foreach ($promos as $promo): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Promo Image">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($promo['title']) ?></h5>
                                <p class="card-text"><?= esc($promo['description']) ?></p>
                                <p class="card-text"><strong>Diskon: <?= esc($promo['discount']) ?>%</strong></p>
                                <p class="card-text">
                                    <small class="text-muted">Berlaku dari <?= esc($promo['start_date']) ?> hingga <?= esc($promo['end_date']) ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
