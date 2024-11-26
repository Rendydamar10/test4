<?= $this->extend('layouts/header') ?>


<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-dark">
        <div class="card-header text-center">
          <h5>Selamat Datang,
            <?= $username; ?>
          </h5>
        </div>
      </div>

      <div class="card-header">
        <a class="card-box d-block mx-auto pd-20 text-dark">
        </a>
      </div><p style="margin-top:20px;"></p>


      <div class="row">
        <div class="col-lg-4">
          <div class="card ">
            <div class="card-header text-center">
              <a href="<?= base_url('produk') ?>"><img src="https://vanscdn.securityhub.id/assets/gbr/repair.png" width="200px"
                  height="180px" alt=""></a>
            </div>
            <div class="card-dark text-center">
              <a href="<?= base_url('produk') ?>" class="text-dark">&nbsp;&nbsp;Jumlah Semua Produk</a>
              <h6>(
                <?= $menuc; ?> )
              </h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card ">
            <div class="card-header text-center">
              <a href="<?= base_url('akun') ?>"><img src="https://vanscdn.securityhub.id/assets/gbr/repair.png" width="200px" height="180px"
                  alt=""></a>
            </div>
            <div class="card-dark text-center">
              <a href="<?= base_url('akun') ?>" class="text-dark">&nbsp;&nbsp;Jumlah User Login</a>
              <h6>(
                <?= $userc; ?> )
              </h6>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <?= $this->endSection() ?>