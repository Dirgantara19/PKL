<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Ubah Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="post" >
                    <input type="hidden" name="id" value="<?= $people['id'];?>">
                    <div class="form-group">
                        <label for="nama"  class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $people['nama']?>"> 
                        <small class="form-text text-danger"><?= form_error('nama');?></small>           
                    </div>
                    <div class="form-group">
                        <label for="alamat"  class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $people['alamat']?>">
                        <small class="form-text text-danger"><?= form_error('alamat');?></small>
                    </div>
                    <div class="form-group">
                         <label for="email"  class="form-label">Email</label>
                        <input type="text"  name="email" class="form-control" id="email" value="<?= $people['email']?>">
                        <small class="form-text text-danger"><?= form_error('email');?></small>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 float-end">
                        Ubah Data
                    </button>
                </form>
            </div>
        </div>
            
        </div>
    </div>
</div>