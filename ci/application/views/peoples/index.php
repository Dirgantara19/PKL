<div class="container">
    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
               People data<strong> success </strong><?= $this->session->flashdata('flash');
               ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>peoples/tambah"><button type="button" class="btn btn-primary">Tambah Data Peoples</button></a>
        </div>
    </div>
    <div class="row mt-2">
         <div class="col-md-6">
            <form  action="<?= base_url('peoples');?>" method="post">
            <div class="input-group">
                
                <input type="text" name="keyword" class="form-control" value="<?= $this->session->userdata('keyword'); ?>" placeholder="Cari di sini...">
                <input class="btn btn-primary" name="submit" type="submit" >
            </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h1>List Of Peoples </h1>
            <h4>Result : <?= $total_rows; ?></h4>
            
            <ul class="list-group">
                
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i= 1; ?>
                            <?php foreach($peoples as $p): ?>
                            <tr>
                            <th scope="row"><?= $i++ ;?></th>
                            <td><?= $p['nama']?></td>
                            <td><?= $p['alamat']?></td>
                            <td><?= $p['email']?></td>
                            <td>
                                 
                             <a href="<?= base_url(); ?>peoples/hapus/<?= $p['id']; ?>" class="badge rounded-pill bg-danger m-1" onclick="return confirm('Yakin?');">Hapus</a>
                             <a href="<?= base_url(); ?>peoples/ubah/<?= $p['id']; ?>" class="badge rounded-pill bg-success m-1">Ubah</a>
                             <a href="<?= base_url(); ?>peoples/detail/<?= $p['id']; ?>" class="badge rounded-pill bg-info m-1">Detail</a>
                            </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>
                   

                
                
            </ul>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>