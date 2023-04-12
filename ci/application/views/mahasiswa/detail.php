

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            <h3>Detail Data Mahasiswa</h3>
        </div>
        <div class="card-body">
            <p class="card-text">Nama : <?= $mahasiswa['nama']; ?></p>
            <p class="card-text">NIS : <?= $mahasiswa['nis']; ?></p>
            <p class="card-text">Email : <?= $mahasiswa['email']; ?></p>
            <p class="card-text">Kejuruan : <?= $mahasiswa['kejuruan']; ?></p>
            <a href="<?= base_url() ;?>mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>