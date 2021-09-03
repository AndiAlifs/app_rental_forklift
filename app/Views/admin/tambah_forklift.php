<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Forklift</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('admin/forklift/tambah_proses') ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tonase">Tonase</label>
                                <select name="tonase" id="tonase" class="form-control">
                                    <option value="3">3 Ton</option>
                                    <option value="5">5 Ton</option>
                                    <option value="8">8 Ton</option>
                                    <option value="10">10 Ton</option>
                                    <option value="15">15 Ton</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" id="merk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" class="form-control"name="harga">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <br>
                                <input type="file" name="gambar" id="gambar">
                            </div>
                            <div class="form-group mt-6">
                                <button type="submit" class="btn btn-primary mb-2 mr-2">Submit</button>
                                <a href="<?= route_to('index_forklift')?>"class="btn btn-warning mb-2">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>