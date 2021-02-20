<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-Commerce Adidas | <?= $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="assets/css/shop.css" type="text/css" media="screen" property="" />
	<link href="assets/css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui1.css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link rel="icon" href="assets/images/adidas-logo.png">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="clearfix"></div>

	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">

			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Halo Ucup,</h3>
				</div>

				<!--preference -->
				<div class="left-side">
					<ul>
						<h3 class="agileits-sear-head">Menu</h3>
						<li>
							<a href="<?= base_url()?>home"><span class="span">Beranda</span></a>
						</li>
                        <li>
							<a href="<?= base_url()?>shop"><span class="span">Katalog</span></a>
						</li>
						<li>
							<a href="<?= base_url()?>riwayat"><span class="span">Riwayat Pembelian</span></a>
						</li>

					</ul>
				</div>
				<!-- // preference -->
			</div>
			<!-- END PRODUCT LEFT -->

			<!-- RIWAYAt -->
			<div class="left-ads-display col-md-9">
				<div class="wrapper_top_shop">
					<div class="clearfix"></div>
						<div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3>Laporan Pemesanan</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Tanggal</th>
												<th>Sepatu</th>
												<th>Size</th>
												<th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Keterangan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($transaksi as $t) :?>
                                            <tr>
                                                <td><?= $t['tgl_transaksi']?></td>
                                                <td><?= $t['nama_produk']?></td>
                                                <td><?= $t['size']?></td>
                                                <td><?= $t['jml_beli']?></td>
                                                <td><?= $t['total_bayar']?></td>
												<?php if($t['status_trans'] == "Bayar Sekarang"){?>
												<td><a href="<?= base_url()?>payment/index/<?= $t['id_transaksi']?>"><button type="button" class="btn btn-info">Bayar</button></a></td>
                                                <td><?= $t['status_trans']?></td>
												<?php }else if($t['status_trans'] == "Terbayar"){?>
												<td><span class="badge badge-warning">On Proses</span></td>
                                                <td><?= $t['status_trans']?></td>
												<?php }else if($t['status_trans'] == "Refund"){?>
												<td><span class="badge badge-warning"><?= $t['status_trans']?></span></td>
                                                <td><?= $t['ketnya']?></td>
												<?php }else {?>
												<td><span class="badge badge-warning"><?= $t['status_trans']?></span></td>
                                                <td><?= $t['ketnya']?></td>
												<?php }?>
                                                <!-- <td><span class="badge badge-info px-2">Belum Terbayar</span></td> -->
                                            </tr>
										<?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- End Riwayat -->
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h4><a href="index.html"><span><img class="navbar-brand" src=" assets/images/adidas-logo-white.png" alt=""></span>E-Commerce
						Adidas </a></h4>
				<p><strong>Adidas</strong> merupakan global desainer, developer, dan marketer alas kaki atletik,
					apparel,
					dan aksesoris
					dengan misi menjadi
					brand sport terdepan di dunia. Brand adidas adalah bagian dari adidas Group, korporasi yang juga
					memiliki brand seperti
					Reebok dan TaylorMade.
				</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>

					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>

				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Informasi <span>Kami</span> </h4>
						<ul>
							<li><a href="<?= base_url() ?>home">Beranda</a></li>
							<li><a href="<?= base_url() ?>about">Tentang Kami</a></li>
							<li><a href="<?= base_url() ?>shop">Katalog</a></li>
							<li><a href="<?= base_url() ?>contact">Kontak</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Kontak <span>Toko</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Hubungi Kami</h6>
									<p>+62 83854010322</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email</h6>
									<p>Email :<a href="mailto:fahimsyakenza29@gmail.com">fahimsyakenza29@gmail.com</a>
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Kantor</h6>
									<p>Jl. Klampis Aji Tengah II/46</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2018 E-Commerce Adidas | Design by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
		</span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function(evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function() {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function(event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>