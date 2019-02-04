<?php include"header.php"; ?>
<style type="text/css">
	.tiket{
		background: white;
		width: 100%;
		min-height: 300px;
		position: relative;
		/*transform: translateY(50%);*/
		border-radius: 2px;
		padding: 7px 20px;
		margin-top: 150px;
	}
	.tiket h4{
		margin-bottom: 0;
	}
	.tiket p{
		color: black;
		font-weight: 500;
		line-height: 20px;
	}
	.tiket .body,
	.tiket .foot{
		margin-top: 32px;
	}
	.tiket .header{
		text-align: center;
	}
	.tiket .header h1{
		text-decoration: underline;
		margin-bottom: 0px;
		color: black;
		font-weight: 500;
	}
	.tiket_box_area .qr-code{
		background: white;
		width: 100%;
		min-height: 200px;
		position: relative;
		border-radius: 2px;
		padding: 20px;
		margin-top: 20px;
	}
	.tiket_box_area .qr-code .img{
	    display: flex;
    	justify-content: center;
	}
</style>
<section class="tiket_box_area">
	<div class="container">
		<div class="tiket">
			<div class="header">
				<h1>Hackathon</h1>
				<p>Senin, 4 Februari 2019 @ 11.00 - 14.00</p>
			</div>
			<div class="body">
				<div class="row">
					<div class="col-lg-2">
						<h4>TIKET #</h4>
						<p>46P85M-14</p>
					</div>
					<div class="col-lg-2">
						<h4>JENIS TIKET</h4>
						<p>REGULER</p>
					</div>
					<div class="col-lg-2">
						<h4>PEMBELI</h4>
						<p>WAHYU</p>
					</div>
					<div class="col-lg-3">
						<h4>KODE KEAMANAN</h4>
						<p>4RT34F</p>
					</div>
					<div class="col-lg-2">
						<h4>STATUS</h4>
						<p>AKTIF</p>
					</div>
				</div>
			</div>
			<div class="foot">
				<div class="row">
					<div class="col-lg-6">
						<h4>LOKASI</h4>
						<p>Jl. Sudirman No.11, Koto Baru, Payakumbuh Utara, Kota Payakumbuh.</p>
					</div>
					<div class="col-lg-3">
						<h4>KAMPUS</h4>
						<p>UNIVERSITAS ANDALAS</p>
					</div>
					<div class="col-lg-3">
						<h4>ORGANISASI</h4>
						<p>NEO TELEMETRI</p>
					</div>
				</div>
			</div>
		</div>
		<div class="qr-code">
			<div class="row">
				<div class="col-lg-3 img">
					<img src="img/clients-logo/qr-kode.png">
				</div>
				<div class="col-lg-9">
					<h1>check in untuk acara ini</h1>
					<p>pindai kode QR ini di acara untuk check in.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap mt-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li>
								<img src="img/instagram/Image-01.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-02.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-03.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-04.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-05.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-06.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-07.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-08.jpg" alt="">
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/jquery-ui/jquery-ui.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/theme.js"></script>