
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E-Commerce Adidas | Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url()?>assets/images/adidas-logo.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="<?= base_url()?>quixlab/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"></b>
                    <span class="logo-compact"></span>
                    <span class="brand-title">
                        <h3 class="text-center text-white">ADIDAS</h3>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--*******************  
            Header Start
        ********************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <img src="<?= base_url()?>assets/images/profil.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <i class="icon-user"></i> <span>Halo Admin</span>
                                        </li>
                                        <li><a href="<?= base_url()?>login/logoutadmin"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--*******************  
            Header End
        ********************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="bg-danger">
                        <a href="">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- container -->
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Pesanan</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">1 Pesanan</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Sepatu Terjual</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">1 Pasang</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabel Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3>Laporan Pemesanan</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th>ID Pesanan</th>
                                                <th>Nama Customer</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th>Total Pembayaran</th>
                                                <th>Rincian</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status Pesanan</th>

                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <?php foreach($transaksi as $t) :?>
                                            <tr>
                                                <th><?= $t['id_transaksi']?></th>
                                                <td><?= $t['nama_pemesan']?></td>
                                                <td><?= $t['tgl_transaksi']?></td>
                                                <td>Rp <?= $t['total_bayar']?></td>
                                                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-lg<?= $t['id_transaksi']?>">View</button></td>
                                                <?php if($t['status_trans']=="Bayar Sekarang"){?>
                                                <td></td>
                                                <td><span class="badge badge-danger px-2">Belum Terbayar</span></td>
                                                <?php }else if($t['status_trans']=="Terbayar"){?>
                                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#basicModal<?= $t['id_transaksi']?>">Pembayaran</button></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#tolak<?= $t['id_transaksi']?>">Tolak</button>
                                                    <a href="<?= base_url()?>admin/terima/<?= $t['id_transaksi']?>"><button type="button" class="btn btn-sm btn-success">Terima</button></a>
                                                </td>
                                                <?php }else if($t['status_trans']=="Refund"){?>
                                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#basicModal<?= $t['id_transaksi']?>">Pembayaran</button></td>
                                                <td><span class="badge badge-danger px-2">Refund</span></td>
                                                <?php }else{?>
                                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#basicModal<?= $t['id_transaksi']?>">Pembayaran</button></td>
                                                <td><span class="badge badge-success px-2">Accepted</span></td>
                                                <?php }?>
                                            </tr>

                                            <!-- Modal view -->
                                            <div class="modal fade bd-example-modal-lg<?= $t['id_transaksi']?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Rincian Pesanan</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <div class="card" style="width: 14rem;">
                                                                        <img class="card-img-top" src="<?= base_url()?>/<?= $t['img_produk']?>" alt="">
                                                                        <div class="card-body">
                                                                            <p class="card-text"><?= $t['nama_produk']?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col mt-5">
                                                                    <div class="row">
                                                                        <h4>Ukuran Sepatu</h4>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p><?= $t['size']?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <h4>Jumlah Sepatu</h4>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p><?= $t['jml_beli']?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <h4>Alamat pengiriman</h4>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p><?= $t['alamat_cust']?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <h4>Nomer Rekening Customer</h4>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p><?= $t['norek_cust']?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL VIEW -->

                                            <!-- Modal Bayar -->
                                            <div class="modal fade" id="basicModal<?= $t['id_transaksi']?>">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Pembayaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img class="card-img-top" src="<?= base_url()?>assets/images/bukti/<?= $t['bukti_pembayaran']?>" alt="">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Modal Bayar -->

                                            <!-- Modal Tolak -->
                                            <div class="modal fade" id="tolak<?= $t['id_transaksi']?>">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Keterangan</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url()?>admin/refund/<?= $t['id_transaksi']?>" method="POST">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Alasan Refund</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alasan" name="refund">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal tolak-->

                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabel Start -->
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url()?>quixlab/plugins/common/common.min.js"></script>
    <script src="<?= base_url()?>quixlab/js/custom.min.js"></script>
    <script src="<?= base_url()?>quixlab/js/settings.js"></script>
    <script src="<?= base_url()?>quixlab/js/gleek.js"></script>
    <script src="<?= base_url()?>quixlab/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="<?= base_url()?>plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="<?= base_url()?>plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="<?= base_url()?>plugins/d3v3/index.js"></script>
    <script src="<?= base_url()?>plugins/topojson/topojson.min.js"></script>
    <script src="<?= base_url()?>plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="<?= base_url()?>plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url()?>plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="<?= base_url()?>plugins/moment/moment.min.js"></script>
    <script src="<?= base_url()?>plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="<?= base_url()?>plugins/chartist/js/chartist.min.js"></script>
    <script src="<?= base_url()?>plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url()?>js/dashboard/dashboard-1.js"></script>

</body>
</html>





