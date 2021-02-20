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
	<link href="<?= base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?= base_url()?>assets/css/shop.css" type="text/css" media="screen" property="" />
	<link href="<?= base_url()?>assets/css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link href="<?= base_url()?>assets/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/checkout.css">
	<link href="<?= base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="<?= base_url()?>assets/css/font-awesome.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url()?>assets/images/adidas-logo.png">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<!-- //cart details -->
		<div class="clearfix"></div>

	</div>

	<!-- //banner -->
	<!-- top Products -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- RIWAYAt -->
			<div class="left-ads-display col-md-12">
				<div class="wrapper_top_shop">
					<div class="clearfix"></div>
						<div class="card">
                            <div class="card-body">
                                <div class="card-title">
									<h2>Pembayaran</h2>
									<p></p>
									<p>Silahkan melakukan transaksi melalui melalui rekening bank toko kami</p>
                                </div>
                            </div>
						</div>
						<div class="row text-center">
							<img src="<?= base_url()?>assets/images/BCA.png" alt="" style="width: 30%">
						</div>
						<div class="row">
							<div class="col">
								<div class="container">
									<?= form_open_multipart('payment/upload');?>
										<div class="form-group">
											<label for="exampleFormControlFile1">Tambahkan Bukti Transaksi</label>
											<input type="file" class="form-control-file" id="exampleFormControlFile1" name="trf">
											<small id="emailHelp" class="form-text text-muted">Format nama customer + tanggal bulan Transaksi Tanpa Spasi.</small>
											<small id="emailHelp" class="form-text text-muted">Contoh : DeryApril2701</small>
											<input type="text" class="form-control-file" id="exampleFormControlFile1" name="id" value="<?= $id;?>" hidden>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<div class="form-group">
													<label for="exampleInputEmail1">Nomer Rekening</label>
													<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomer Rekening" name="norek">
													<small id="emailHelp" class="form-text text-muted">Nomer Rekening berguna jika terjadi Refund.</small>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-secondary">Simpan Pembayaran</button>
									<?= form_close();?>
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
							<li><a href="<?php base_url() ?>">Beranda</a></li>
							<li><a href="<?php base_url() ?>about">Tentang Kami</a></li>
							<li><a href="<?php base_url() ?>shop">Katalog</a></li>
							<li><a href="<?php base_url() ?>contact">Kontak</a></li>
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
	<!-- easy-responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>

	<!-- credit-card -->
	<script type="text/javascript" src="js/creditly.js"></script>
	<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

	<script type="text/javascript">
		$(function() {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>
	<!-- //credit-card -->


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