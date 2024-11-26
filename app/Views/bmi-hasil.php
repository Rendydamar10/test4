<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil</h2>
        <p>BMI Kamu: <?= number_format($bmi, 2) ?></p>
        <p>Kategori kamu: <?= $category ?></p>
        <p><?= $comment ?> <a href="<?= base_url('/') ?><?= $suggestion ?>" class="text-primary">Klik disini</a></p>
        <a href="<?= base_url('hitung-bmi')?>" class="btn btn-primary">Hitung Ulang</a>
    </div>
</body>
</html>
