<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Sopir</h1>
        </div>
        <a href="<?= base_url('/admin/sopir/tambah_data') ?>" class="btn btn-primary mb-2">Tambah Data</a>
        <?php if(session()->get('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['pesan']?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        
            <div class="row clearfix">
                <div class="col-md-12 column table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead align="center" class="text-bold">
                            <th scope="col">No. </th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($sopir as $value) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $value->nama ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/sopir/edit').'/'.$value->id?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                        <a href="<?=base_url('admin/sopir/delete').'/'.$value->id?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <!-- <a href="<?=base_url('admin/sopir/edit').'/'.$value->id?>"" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</div>