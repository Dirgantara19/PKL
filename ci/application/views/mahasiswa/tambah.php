<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Tambah Data Mahasiswa
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
                        <label for="nis"  class="form-label">NIS</label>
                        <input type="text" name="nis" class="form-control" id="nis" >
                    </div>
                    <div class="form-group">
                         <label for="email"  class="form-label">Email</label>
                        <input type="text"  name="email" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                        <label for="kejuruan">Kejuruan</label>
                        <select name="kejuruan" class="form-control" id="kejuruan">
                            <option value="RPL" >RPL</option>
                            <option value="TKJ" >TKJ</option>
                            <option value="MM" >MM</option>
                        </select>
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