<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pembayaran</h1>
        </div>
        <?php if (session()->get('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['pesan'] ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <form action="" method="get">
                    <div class="row">
                        <!-- <div class="col-md-5">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Dari</div>
                                    </div>
                                    <input type="date" class="form-control" name="dari" id="dari" value="<?= isset($_GET['dari']) ? $_GET['dari'] : Date('Y-m-d') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Sampai</div>
                                    </div>
                                    <input type="date" class="form-control" name="sampai" id="sampai" value="<?= isset($_GET['sampai']) ? $_GET['sampai'] : Date('Y-m-d') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div>
                                <button type="submit" class="btn btn-outline-primary btn-lg btn-block mx-auto my-auto">Filter</button>
                            </div>
                        </div> -->
                    </div>
                </form>
                <table class="table table-hover table-bordered">
                    <thead align="center" class="text-bold">
                        <th scope="col">No. </th>
                        <th scope="col">Customer</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Waktu Transaksi</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Aksi</th>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pembayaran as $value) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value->customer ?></td>
                                <td><?= $value->tanggal_transaksi ?></td>
                                <td><?= $value->waktu_transaksi ?></td>
                                <td>Rp. <?= $value->total_harga ?>,--</td>
                                <?php if (strtolower($value->status_bayar) == 'sudah lunas') : ?>
                                    <td><span class="badge badge-primary">Sudah Lunas</span></td>
                                <?php else : ?>
                                    <td><span class="badge badge-danger">Belum Lunas</span></td>
                                <?php endif ?>
                                <td>
                                    <?php if (strtolower($value->status_bayar) == 'sudah lunas') : ?>
                                        <a href="<?= base_url('admin/pembayaran/belum_lunas') . '/' . $value->id ?>" class="btn btn-sm btn-dark"><i class="fas fa-times"></i></a>
                                    <?php else : ?>
                                        <a href="<?= base_url('admin/pembayaran/lunas') . '/' . $value->id ?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                    <?php endif ?>
                                    <a href="<?= base_url('admin/pembayaran/edit') . '/' . $value->id_transaksi ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('admin/pembayaran/delete') . '/' . $value->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>