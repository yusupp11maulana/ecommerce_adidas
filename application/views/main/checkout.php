<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-Commerce Adidas | <?= $title; ?> </title>
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
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="<?= base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="<?= base_url()?>css/font-awesome.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url()?>assets/images/adidas-logo.png">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="clearfix"></div>

	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="container">
			<form action="<?= base_url()?>checkout/insert" method="POST">
				<label for="basic-url"><h2>Nama Pemesan</h2></label>
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="namapemesan" value="<?= $nama?>" readonly>
					<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="id_cust" value="<?= $user?>" hidden>
					<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="kd" value="<?= $id?>" hidden>
					<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="harga" value="<?= $harga?>" hidden>
				</div>
				<label for="basic-url"><h2>Alamat Pemesan</h2></label>
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="alamat">
				</div>
				<label for="basic-url"><h2>Informasi Produk</h2></label>
				<div class="row mt-2">
					<div class="col-sm-3">
						<div class="card" style="width: 20rem;">
							<img class="card-img-top" src="<?= base_url()?>/<?= $gambar?>" alt="Card image cap">
							<div class="card-body">
								<p class="card-text text-center"><?= $namasepatu?></p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Harga : Rp <?= $harga?></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="row mb-3 mt-5">
							<label for="basic-url"><h2>Size</h2></label>
							<div class="input-group mb-3">
								<select class="form-control" style="font-size: 12px" name="size">
									<option disabled selected>- Pilih Size -</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
								</select>
							</div>
						</div>
						<div class="row">
							<label for="basic-url"><h2>Jumlah Pemesanan</h2></label>
							<div class="input-group mb-3">
								<input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="jumlah">
							</div>
						</div>

						<div class="row mt-3">
							<button type="submit" class="btn btn-primary btn-lg mb-2">Pesan Sekarang</button>
						</div>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col">
					<a href="<?= base_url()?>shop"><button class="btn btn-danger btn-lg mb-2 float-right">Batal Pesan</button></a>
				</div>
			</div>
		</div>

		<!-- footer -->
		<div class="footer_agileinfo_w3 mt-5">
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
	<!-- js -->
	<script type="text/javascript" src="<?= base_url()?>js/jquery-2.1.4.min.js"></script>
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
	<script src="<?= base_url()?>js/modernizr-2.6.2.min.js"></script>
	<script src="<?= base_url()?>js/classie.js"></script>
	<script src="<?= base_url()?>js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="<?= base_url()?>js/search.js"></script>
	<!--//search-bar-->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function(c) {
			$('.close1').on('click', function(c) {
				$('.rem1').fadeOut('slow', function(c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function(c) {
			$('.close2').on('click', function(c) {
				$('.rem2').fadeOut('slow', function(c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function(c) {
			$('.close3').on('click', function(c) {
				$('.rem3').fadeOut('slow', function(c) {
					$('.rem3').remove();
				});
			});
		});
	</script>

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