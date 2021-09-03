<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Forklift</h1>
        </div>
        <a href="<?= base_url('/admin/forklift/tambah_data') ?>" class="btn btn-primary mb-2">Tambah Data</a>
        <?php if(session()->get('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['pesan']?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <table class="table table-hover table-striped table-bordered">
            <thead align="center" class="text-bold">
                <th scope="col">Gambar</th>
                <th scope="col">Tonase</th>
                <th scope="col">Merek</th>
                <th scope="col">Harga (/ 6 jam)</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </thead>
            <tbody>
                <?php foreach ($forklift as $value) : ?>
                    <tr>
                        <td align="center"> <img src="<?= base_url($value->images) ?>" alt="" width="100em" class="m-2"></td>
                        <td><?= $value->tonase ?> Ton</td>
                        <td><?= $value->merk ?></td>
                        <td>Rp. <?= $value->harga ?>,--</td>
                        <?php if($value->status == 1):?>
                            <td><span class="badge badge-primary">Tersedia</span></td>
                        <?php else:?>
                            <td><span class="badge badge-danger">Tidak Tersedia</span></td>
                        <?php endif?>
                        <td>
                            <a href="<?=base_url('admin/forklift/detail').'/'.$value->id?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?=base_url('admin/forklift/delete').'/'.$value->id?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?=base_url('admin/forklift/edit').'/'.$value->id?>"" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>