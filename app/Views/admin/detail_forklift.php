<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Forklift</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url($images) ?>" alt="" width="80%">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Tonase</td>
                                <td><?= $tonase ?> Ton</td>
                            </tr>
                            <tr>
                                <td>Merek</td>
                                <td><?= $merk ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?= $harga ?>,--</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <?php if ($status == 1) : ?>
                                    <td><span class="badge badge-primary">Tersedia</span></td>
                                <?php else : ?>
                                    <td><span class="badge badge-danger">Tidak Tersedia</span></td>
                                <?php endif ?>
                                <td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="<?=base_url('admin/forklift/edit').'/'.$id?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= route_to('index_forklift')?>"class="btn btn-warning ml-2">Kembali</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>