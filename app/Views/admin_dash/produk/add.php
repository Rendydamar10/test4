<?= $this->extend('layouts/header') ?>

<?= $this->section('content') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah produk</h4>
                </div>
                <div class="card-body">


                    <?php
                    $session = session();
                    $error = $session->getFlashdata('error');
                    $success = $session->getFlashdata('success');
                    ?>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger">
                            <?php foreach ($error as $key => $value): ?>
                                <?= esc($value) ?><br>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($success)): ?>
                        <div class="alert alert-success">
                            <?= $success ?>
                        </div>
                    <?php endif; ?>


                    <form action="<?= base_url('tambah-produk') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kat">Nama kategori</label>
                            <select name="nama_kategori" class="form-control" required>
                                <option value="">Masukkan Pilihan</option>
                                <option value="down">Menurunkan Berat badan</option>
                                <option value="up">Penaikan Berat badan</option>
                                <option value="mt">Maintenance Berat badan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="menu">Nama Menu</label>
                            <input type="text" name="nama_menu" class="form-control" required
                                value="<?= old('nama_menu') ?>">
                        </div>

                        <div class="form-group">
                            <label for="menu">Foto Menu</label>
                            <input type="file" name="foto_menu" class="form-control" required>
                            <div class="text-danger">
                                <small class="text-danger">Harap masukkan Gambar terlebih dahulu.</small>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="kl">Kalori</label>
                            <input type="number" name="kalori_menu" class="form-control" required
                                value="<?= old('kalori_menu') ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="<?= base_url('produk') ?>" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>