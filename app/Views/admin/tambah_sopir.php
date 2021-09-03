<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Supir</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('admin/sopir/tambah_proses') ?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Supir</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                <div class="form-group mt-6">
                    <button type="submit" class="btn btn-primary mb-2 mr-2">Submit</button>
                    <a href="<?= route_to('index_sopir') ?>" class="btn btn-warning mb-2">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>