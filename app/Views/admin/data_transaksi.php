<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
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
                        <div class="col-md-5">
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
                        </div>
                    </div>
                </form>
                <table class="table table-hover table-striped table-bordered table-responsive">
                    <thead align="center" class="text-bold">
                        <th scope="col">No. </th>
                        <th scope="col">Customer</th>
                        <th scope="col">Jenis Forklift</th>
                        <th scope="col">Tanggal Rental</th>
                        <th scope="col">Waktu Rental</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Jumlah Shift</th>
                        <th scope="col">Harga Per Shift</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Supir</th>
                        <th scope="col">Status Kembali</th>
                        <th scope="col">Aksi</th>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($transaksi as $value) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value->customer ?></td>
                                <td><?= $value->id_forklift ?></td>
                                <td><?= $value->tanggal_rental ?></td>
                                <td><?= $value->waktu_rental ?></td>
                                <td><?= $value->tanggal_kembali ?></td>
                                <td><?= $value->jumlah_shift ?></td>
                                <td>Rp. <?= $value->harga_shift ?>,--</td>
                                <td>Rp. <?= $value->total_harga ?>,--</td>
                                <td><?= ucwords($value->sopir) ?></td>
                                <?php if (strtolower($value->status_kembali) == 'sudah kembali') : ?>
                                    <td><span class="badge badge-primary">Sudah Kembali</span></td>
                                <?php else : ?>
                                    <td><span class="badge badge-danger">Belum kembali</span></td>
                                <?php endif ?>
                                <td>
                                    <a href="<?= base_url('admin/transaksi/edit') . '/' . $value->id ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                    <a href="<?= base_url('admin/transaksi/delete') . '/' . $value->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <!-- <a href="<?= base_url('admin/transaksi/edit') . '/' . $value->id ?>"" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>