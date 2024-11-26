<?= $this->extend('layouts/header') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-xs-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h5 class="text-center">Informasi Akun</h5>
                </div>
                <div class="card-body text-center">
                    <img src="https://vanscdn.securityhub.id/klien_diet_kuy/gbr/user.png" class="img-rounded" width="200px" height="200px">
                    <h5 class="mt-4 text-dark text-uppercase">
                        <?= $username ?>
                    </h5>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-xs-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h5 class="text-center">Detail Akun</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('pengaturan').'/'.$data_menu['username'] ?>" method="POST" enctype="multipart/form-data">

                        <?= csrf_field() ?>
                        <input type="hidden" value="<?= $data_menu['username'] ?>">

                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="user">Username</label>
                                    <input type="text" name="username_baru" class="form-control" value="<?= $data_menu['username'] ?>"readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="text" name="password_baru" class="form-control" value="<?= $data_menu['password'] ?>"readonly>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 col-xs-12">
                                <button class="btn btn-primary btn-block" name="submit">Simpan Perubahan</button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>