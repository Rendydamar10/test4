<?= $this->extend('layouts/header') ?>


<?= $this->section('content') ?>
<div class="container">

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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 style="text-align: center;">User Login </h5><a href="<?= base_url('tambah-user') ?>"
                        class="btn btn-primary float-right text-light">Tambah User</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nickname</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($menu_data as $menu): ?>
                            <tr>
                                <td>
                                    <?= $i++ + ($currentPage - 1) * 999 ?>
                                </td>
                                <td>
                                    <?= $menu['email'] ?>
                                </td>
                                <td>
                                    <?= $menu['username'] ?>
                                </td>
                                <td>
                                    <?= $menu['password'] ?>
                                </td>
                                <td>
                                    <?= $menu['nickname'] ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('edit-user') . '/' . $menu['username'] ?>">Edit</a>
                                    <a href="<?= base_url('hapus-user/' . $menu['username']) ?>" class="text-danger"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>