<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="card">
            <div class="card-header">
                Form Rental Forklift
            </div>
            <div class="card-body">
                <form action="<?= base_url('rental_proses') ?>" method="post">
                    <div class="row">
                    <input type="text" name="id" id="id" value="<?= $id ?>" hidden class="form-control">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="tonase">Tonase</label>
                                <input type="text" name="tonase" id="tonase" value="<?= $tonase ?>" readonly class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" id="merk" value="<?= $merk ?>" readonly class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="harga">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $harga ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="pemesan">Nama Pemesan</label>
                                <input type="text" name="pemesan" id="pemesan" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="perusahaan">Nama Perusahaan</label>
                                <input type="text" name="perusahaan" id="perusahaan" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="lokasi">Lokasi Pengerjaan</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="tanggal">Tanggal Pengerjaan</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="waktu">Waktu Pengerjaan</label>
                                <input type="time" name="waktu" id="waktu" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="shift">Jumlah Shift (/6 Jam)</label>
                                <input type="number" name="shift" id="shift" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="sopir">Sopir</label>
                                <select name="sopir" id="sopir" class="form-control custom-select">
                                    <?php foreach ($sopir as $supir) :?> 
                                        <option value="<?=$supir->nama?>"><?=$supir->nama?></option>
                                    <?php endforeach;?>
                                    </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="pembayaran">Total Pembayaran</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" class="form-control" name="totalHarga" id="totalHarga" value="<?= $harga ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="metode">Metode Pembayaran</label>
                                <select name="metode" id="metode" class="form-control custom-select">
                                    <option value="cash">Cash</option>
                                    <option value="transfer">Transfer</option>
                                </select>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="btn btn-primary mb-2 mr-2">Submit</button>
                                <a href="<?= route_to('index_forklift') ?>" class="btn btn-warning mb-2">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?= base_url() . '/assets/homepage_shop/js/scripts.js' ?>"></script>

<script>
    $("#shift").change(function () {
        $("#totalHarga").val($("#shift").val()*$("#harga").val());
    });
</script>
</body>

</html>