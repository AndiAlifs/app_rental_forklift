<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Transaksi</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('admin/transaksi/edit_proses') ?>" method="post">
                    <input type="text" name="id" id="id" class="form-control" value="<?= $id ?>" hidden>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="customer">Nama customer</label>
                                <input type="text" name="customer" id="customer" class="form-control" value="<?= $customer ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control" value="<?= $lokasi ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="tanggal_rental">Tanggal Rental</label>
                                <input type="date" name="tanggal_rental" id="tanggal_rental" class="form-control" value="<?= $tanggal_rental ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="waktu_rental">Waktu Pengerjaan</label>
                                <input type="time" name="waktu_rental" id="waktu_rental" class="form-control" value="<?= $waktu_rental ?>"">
                            </div>
                            <div class="form-group mb-2">
                                <label for="tanggal_selesai">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" value="<?= $tanggal_selesai ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="jumlah_shift">Jumlah Shift</label>
                                <input type="number" name="jumlah_shift" id="jumlah_shift" class="form-control" value="<?= $jumlah_shift ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="harga_shift">Harga Per Shift</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" class="form-control" name="harga_shift" value="<?= $harga_shift ?>">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="total_harga">Total Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" class="form-control" name="total_harga" value="<?= $total_harga ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="sopir">Sopir</label>
                                <select name="sopir" id="sopir" class="form-control custom-select">
                                    <?php foreach ($sopir_list as $supir) : ?>
                                        <option value="<?= $supir->nama ?>" <?= ($supir->nama == $sopir) ? 'selected' : '' ?>><?= $supir->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="tonase">Tonase</label>
                                <select name="tonase_forklift" id="tonase_forklift" class="form-control">
                                    <option value="3" <?= $tonase_forklift == 3 ? 'selected' : '' ?>>3 Ton</option>
                                    <option value="5" <?= $tonase_forklift == 5 ? 'selected' : '' ?>>5 Ton</option>
                                    <option value="8" <?= $tonase_forklift == 8 ? 'selected' : '' ?>>8 Ton</option>
                                    <option value="10 <?= $tonase_forklift == 10 ? 'selected' : '' ?> ">10 Ton</option>
                                    <option value="15 <?= $tonase_forklift == 15 ? 'selected' : '' ?> ">15 Ton</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="merk_forklift">Merk</label>
                                <input type="text" name="merk_forklift" id="merk_forklift" class="form-control" value="<?= $merk_forklift ?>">
                            </div>
                            <div class="form-group">
                                <label for="status_kembali">Status Kembali</label>
                                <select name="status_kembali" id="status_kembali" class="form-control">
                                    <option value="sudah kembali" <?= strtolower($status_kembali) == 'sudah kembali' ? 'selected' : '' ?>>Sudah Kembali</option>
                                    <option value="belum kembali" <?= strtolower($status_kembali) == 'belum kembali' ? 'selected' : '' ?>>Belum Kembali</option>
                                </select>
                            </div>
                            <div class="form-group mt-6">
                                <button type="submit" class="btn btn-primary mb-2 mr-2">Simpan</button>
                                <a href="<?= route_to('index_transaksi') ?>" class="btn btn-warning mb-2">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>