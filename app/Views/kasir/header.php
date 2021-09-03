<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rental Forklift</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url().'/assets/homepage_shop/assets/favicon.ico'?>" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url().'/assets/homepage_shop/css/styles.css'?>" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?=route_to('kasir_index')?>">Rental Forklift</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=route_to('kasir_index')?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=route_to('index_forklift')?>">Admin Panel</a></li>
                        <?php if (session()->get('login_kasir')):?>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=route_to('kasir_logout')?>">Logout Kasir</a></li>                    
                        <?php endif;?>
                    </ul>
                </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Rental Forklift</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Portal Rental Forklift</p>
                </div>
            </div>
        </header>