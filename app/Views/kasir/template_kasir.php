<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <?php if (session()->get('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['pesan'] ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 justify-content-center">
            <?php foreach ($forklift as $value) : ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url($value->images) ?>" alt="..." height="200px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div>
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $value->merk ?></h5>
                                <?php if ($value->status == 1) : ?>
                                    <span class="badge bg-primary my-1">Tersedia</span>
                                <?php else : ?>
                                    <span class="badge bg-danger my-1">Tidak Tersedia</span>
                                <?php endif ?>
                                <h5 class=>Berat <?= $value->tonase ?> ton</h5>
                                <!-- Product price-->
                                Rp. <?= $value->harga ?>,-- / Shift (6 jam)

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer px-4 border-top-0 bg-transparent">
                            <a class="btn btn-outline-success btn-block" href="<?= base_url('rental') . '/' . $value->id ?>">Rental</a>
                            <a class="btn btn-outline-primary btn-block" href="<?= base_url('detail') . '/' . $value->id ?>">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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
</body>

</html>