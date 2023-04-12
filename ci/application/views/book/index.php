<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach( $book as $b) :?> 
                        
                        
                        <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $b['sampul']; ?></td>
                        <td><?= $b['judul']; ?></td>
                        <td><?= $b['penulis']; ?></td>
                        <td><?= $b['penerbit']; ?></td>
                        <td>
                            <a href="<?= base_url();?>book/detail/<?= $$b['id']; ?>">
                                Detail
                            </a>
                        </td>
                        </tr>
                        
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>