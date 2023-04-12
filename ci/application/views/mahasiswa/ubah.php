<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Ubah Data Mahasiswa
            </div>
            <div class="card-body">
                
                <form action="" method="post" >
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                    <div class="form-group">
                        <label for="nama"  class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']?>"> 
                        <small class="form-text text-danger"><?= form_error('nama');?></small>           
                    </div>
                    <div class="form-group">
                        <label for="nis"  class="form-label">NIS</label>
                        <input type="number" name="nis" class="form-control" id="nis" value="<?= $mahasiswa['nis']?>">
                        <small class="form-text text-danger"><?= form_error('nis');?></small>
                    </div>
                    <div class="form-group">
                         <label for="email"  class="form-label">Email</label>
                        <input type="email"  name="email" class="form-control" id="email" value="<?= $mahasiswa['email']?>">
                        <small class="form-text text-danger"><?= form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label for="kejuruan">Kejuruan</label>
                        <select name="kejuruan" class="form-control" id="kejuruan">
                        <?php foreach($kejuruan as $k):?>
                        
                            <?php if($k == $mahasiswa['kejuruan']):?>  
                                  <option value="<?= $k ;?>" selected ><?= $k ;?></option>
                            <?php else:?>
                    
                                  <option value="<?= $k ;?>" ><?= $k ;?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>   
                        </select>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">
                        Ubah Data
                    </button>
                </form>
            </div>
        </div>
            
        </div>
    </div>
</div>