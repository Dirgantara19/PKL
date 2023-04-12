<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            <h3>Detail Data People</h3>
        </div>
        <div class="card-body">
            <p class="card-text">Nama : <?= $people['nama']; ?></p>
            <p class="card-text">Alamat : <?= $people['alamat']; ?></p>
            <p class="card-text">Email : <?= $people['email']; ?></p>
            <a href="<?= base_url() ;?>peoples" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>