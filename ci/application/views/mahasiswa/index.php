
<div class="container">
    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
               Data mahasiswa<strong> berhasil </strong><?= $this->session->flashdata('flash');
               ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah"><button type="button" class="btn btn-primary">Tambah Data Mahasiswa</button></a>
        </div>
    </div>
    <div class="row mt-1">

        <div class="col-md-6">
            <form  action="" method="post">
            <div class="input-group">
                
                <input type="text" name="keyword" class="form-control" placeholder="Cari di sini...">
                <button class="btn btn-primary" name="submit' type="submit" id="button-addon2">Cari</button>
            </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa </h1>
            <?php if( empty($mahasiswa)): ?>
                    <div class="alert alert-danger" role="alert">
                       Data tidak ditemukan...
                     </div>
                <?php endif; ?>
            <ul class="list-group">
                <?php foreach($mahasiswa as $mhs): ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge rounded-pill bg-danger m-1 float-end" onclick="return confirm('Yakin?');">Hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge rounded-pill bg-success m-1 float-end" >Ubah</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill bg-info m-1 float-end">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?= $this->pagination->create_links(); ?>
        
    </div>
    
</div>