<!DOCTYPE html>
<html lang="en" ng-app="apps">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>cla</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="<?= base_url() ?>home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>home/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>home/css/responsive.css">
    <link rel="icon" href="<?= base_url() ?>home/images/logo2.png" type="image/gif" />
    <link rel="stylesheet" href="<?= base_url() ?>home/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://opensource.propeller.in/components/card/css/card.css" type="text/css" rel="stylesheet" />
    <link href="https://opensource.propeller.in/docs/css/example-docs.css" type="text/css" rel="stylesheet" />
    <link href="https://opensource.propeller.in/components/typography/css/typography.css" type="text/css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://opensource.propeller.in/components/checkbox/css/checkbox.css" type="text/css" rel="stylesheet" />
    <link href="https://opensource.propeller.in/components/textfield/css/textfield.css" type="text/css" rel="stylesheet" />
    <link href="https://opensource.propeller.in/components/radio/css/radio.css" type="text/css" rel="stylesheet" />
    <link href="https://opensource.propeller.in/components/toggle-switch/css/toggle-switch.css" type="text/css" rel="stylesheet" />
</head>

<body class="main-layout inner_posituong computer_page" style="background-color: '#f4f5fa' !important;">
    <div class="loader_bg">
        <div class="loader"><img src="<?= base_url() ?>home/images/loading.gif" alt="#" /></div>
    </div>
    <header>
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="<?= base_url() ?>home/images/logo2.png" width="25%" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('produk') ?>">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('rekomendasi') ?>">Sistem Rekomendasi</a>
                                    </li>
                                    <!-- <li class="nav-item d_none">
                                        <a class="nav-link" href="#">Login</a>
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?= $this->renderSection('content'); ?>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <img class="logo1" src="<?= base_url() ?>home/images/logo2.png" width="70%" alt="#" />
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <h3>Contact Us</h3>
                        <ul class="conta">
                            <li>Master Computer Pusa,<br> Jl. Percetakan Negara No. 94 Jayapura, Papua <br>Telp. 0967-533588</li>
                            <li>Master Computer SAGA Mall,<br> SAGA Mall Abepura Lt. 2 IT Shop</li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <h3>Alamat Lain</h3>
                        <ul class="conta">
                            <li>Master Computer Koramil, <br> Jl. Raya Abepura Depan Kantor Koramil <br>Telp. 0967-584441</li>
                            <li>Master Sentani, <br> Jl. Raya Sentani Pertigaan Lampu Merah Pasar Lama</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>Ocs Papua</p>
                  </div>
               </div>
            </div>
         </div>
        </div>
    </footer>
    <script src="<?= base_url() ?>home/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/libs/angular/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.8.2/angular-sanitize.min.js" integrity="sha512-JkCv2gG5E746DSy2JQlYUJUcw9mT0vyre2KxE2ZuDjNfqG90Bi7GhcHUjLQ2VIAF1QVsY5JMwA1+bjjU5Omabw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.30/angular-ui-router.min.js" integrity="sha512-HdDqpFK+5KwK5gZTuViiNt6aw/dBc3d0pUArax73z0fYN8UXiSozGNTo3MFx4pwbBPldf5gaMUq/EqposBQyWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-animate/1.8.2/angular-animate.min.js" integrity="sha512-jZoujmRqSbKvkVDG+hf84/X11/j5TVxwBrcQSKp1W+A/fMxmYzOAVw+YaOf3tWzG/SjEAbam7KqHMORlsdF/eA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url() ?>/js/apps.js"></script>
    <script src="<?= base_url() ?>/js/services/helper.services.js"></script>
    <script src="<?= base_url() ?>/js/services/auth.services.js"></script>
    <script src="<?= base_url() ?>/js/services/admin.services.js"></script>
    <script src="<?= base_url() ?>/js/services/pesan.services.js"></script>
    <script src="<?= base_url() ?>/js/controllers/admin.controllers.js"></script>
    <script src="<?= base_url() ?>/js/components/components.js"></script>
    <script src="<?= base_url() ?>/libs/angular-ui-select2/src/select2.js"></script>
    <script src="<?= base_url() ?>/libs/angular-datatables/dist/angular-datatables.js"></script>
    <script src="<?= base_url() ?>/libs/angular-locale_id-id.js"></script>
    <script src="<?= base_url() ?>/libs/input-mask/angular-input-masks-standalone.min.js"></script>
    <script src="<?= base_url() ?>/libs/jquery.PrintArea.js"></script>
    <script src="<?= base_url() ?>/libs/angular-base64-upload/dist/angular-base64-upload.min.js"></script>
    <script src="<?= base_url() ?>/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/libs/datatables/btn.js"></script>
    <script src="<?= base_url() ?>/libs/datatables/print.js"></script>
    <script src="<?= base_url() ?>/libs/loading/dist/loadingoverlay.min.js"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

    <script src="<?= base_url() ?>home/js/popper.min.js"></script>
    <script src="<?= base_url() ?>home/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>home/js/jquery-3.0.0.min.js"></script>
    <script src="<?= base_url() ?>home/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url() ?>home/js/custom.js"></script>

    <script src="https://opensource.propeller.in/components/global/js/global.js"></script>
    <script type="text/javascript" src="https://opensource.propeller.in/components/checkbox/js/checkbox.js"></script>
    <script type="text/javascript" src="https://opensource.propeller.in/components/textfield/js/textfield.js"></script>
    <script type="text/javascript" src="https://opensource.propeller.in/components/radio/js/radio.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>