<?= $this->extend('layouts/header') ?>

<?= $this->section('content') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User</h4>
                </div>
                <div class="card-body">


                    <?php if (session()->has('validation')): ?>
                        <div class="alert alert-danger">
                            <?= session('validation')->listErrors() ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" class="text-white">&times;</span>
                            </button>

                        </div>
                    <?php endif; ?>
                    <?php if (session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?= session('success') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('edit-user') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" value="<?= $data_menu['username'] ?>">
                        <div class="form-group">
                            <label for="kat">Email Baru</label>
                            <input type="email" name="email_baru" class="form-control" required
                                value="<?= $data_menu['email'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="menu">Username Baru</label>
                            <input type="text" name="username_baru" class="form-control" required
                                value="<?= $data_menu['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">Password Baru</label>
                            <input type="text" name="password_baru" class="form-control" required
                                value="<?= $data_menu['password'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="kl">Nickname Baru</label>
                            <input type="text" name="nickname_baru" class="form-control" required
                                value="<?= $data_menu['nickname'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                        <a href="<?= base_url('akun') ?>" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>