<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Forklift</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('admin/forklift/edit_proses') ?>" method="post">
                <input type="text" name="id" id="id" class="form-control" value="<?=$id?>" hidden>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tonase">Tonase</label>
                                <select name="tonase" id="tonase" class="form-control">
                                    <option value="3" <?= $tonase == 3? 'selected' :'' ?> >3 Ton</option>
                                    <option value="5" <?= $tonase == 5? 'selected' :'' ?> >5 Ton</option>
                                    <option value="8" <?= $tonase == 8? 'selected' :'' ?> >8 Ton</option>
                                    <option value="10 <?= $tonase == 10? 'selected' :'' ?> ">10 Ton</option>
                                    <option value="15 <?= $tonase == 15? 'selected' :'' ?> ">15 Ton</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" id="merk" class="form-control" value="<?=$merk?>">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" class="form-control"name="harga" value="<?=$harga?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" <?= $status == 1? 'selected' :'' ?> >Tersedia</option>
                                    <option value="0" <?= $status == 0? 'selected' :'' ?> >Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <br>
                                <input type="file" name="gambar" id="gambar">
                            </div>
                            <div class="form-group mt-6">
                                <button type="submit" class="btn btn-primary mb-2 mr-2">Simpan</button>
                                <a href="<?= route_to('index_forklift')?>"class="btn btn-warning mb-2">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>