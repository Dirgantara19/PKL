<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Insert Data People
            </div>
            <div class="card-body">
                <?php if( validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post" >
                
                    <div class="form-group">
                        <label for="nama"  class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" >            
                    </div>
                    <div class="form-group">
                        <label for="alamat"  class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" >
                    </div>
                    <div class="form-group">
                         <label for="email"  class="form-label">Email</label>
                        <input type="text"  name="email" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                        <button type="submit" name="tambah" class="mt-3 btn btn-primary float-end">
                            Tambah
                        </button>
                    </div>
                   
                </form>
            </div>
        </div>
            
        </div>
    </div>
</div>