<?php 
include"header.php"; 
if ($_GET['page']==1) {
?> 

	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<div class="alert alert-success" role="alert">
			  Terima Kasih. e-tiket kamu akan kami proses setelah melakukan pembayaran.
			</div>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Info Pembayaran</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Kode Pembayaran</span> : #xyz</a>
							</li>
							<li>
								<a href="#">
									<span>Tanggal Pemesanan</span> : 2 Januari 2019</a>
							</li>
							<li>
								<a href="#">
									<span>Total</span> : Rp 100,000</a>
							</li>
							<li>
								<a href="#">
									<span>Status</span> : Menunggu Pembayaran</a>
									<!-- <span>Status</span> : Pembayaran Berhasil</a> -->
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Organisasi</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama Organisasi</span> : Neo Telemetri</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Waktu Pembayaran</span> : <div id="waktu_pembayaran"></div></a>
							</li>
							<li>
								<a href="#">
									<span>Link Tiket</span> : Belum Ada</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Pembeli</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama</span> : Nama Lengkap</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Fakultas</span> : Teknik</a>
							</li>
							<li>
								<a href="#">
									<span>Jurusan </span> : Teknik Mesin</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detail Pembayaran</h2>
				<div class="table-responsive">
					<table class="table" width="100%">
						<thead>
							<tr>
								<th scope="col">Event</th>
								<th scope="col">Jenis</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Hackathon</p>
								</td>
								<td>
									<p>Reguler</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 50,000</p>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<p>VIP</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 100,000</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<h4>Total SEMUA</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 150,000</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
<?php 
}
if ($_GET['page']==2) {
?>
	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<div class="alert alert-warning" role="alert">
			  Maaf. e-tiket kamu tidak kami proses karna melewati jangka waktu pembayaran.
			</div>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Info Pembayaran</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Kode Pembayaran</span> : #xyz</a>
							</li>
							<li>
								<a href="#">
									<span>Tanggal Pemesanan</span> : 2 Januari 2019</a>
							</li>
							<li>
								<a href="#">
									<span>Total</span> : Rp 100,000</a>
							</li>
							<li>
								<a href="#">
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
									<span>Status</span> : Pembayaran Dibatalkan</a>
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Organisasi</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama Organisasi</span> : Neo Telemetri</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Waktu Pembayaran</span> : <div id="waktu_pembayaran"></div></a>
							</li>
							<li>
								<a href="#">
									<span>Link Tiket</span> : Belum Ada</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Pembeli</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama</span> : Nama Lengkap</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Fakultas</span> : Teknik</a>
							</li>
							<li>
								<a href="#">
									<span>Jurusan </span> : Teknik Mesin</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detail Pembayaran</h2>
				<div class="table-responsive">
					<table class="table" width="100%">
						<thead>
							<tr>
								<th scope="col">Event</th>
								<th scope="col">Jenis</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Hackathon</p>
								</td>
								<td>
									<p>Reguler</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 50,000</p>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<p>VIP</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 100,000</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<h4>Total SEMUA</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 150,000</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
<?php 
}
if ($_GET['page']==3) {
?>
		<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<div class="alert alert-primary" role="alert">
			  Mohon tunggu, tiket kamu sedang diproses.
			</div>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Info Pembayaran</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Kode Pembayaran</span> : #xyz</a>
							</li>
							<li>
								<a href="#">
									<span>Tanggal Pemesanan</span> : 2 Januari 2019</a>
							</li>
							<li>
								<a href="#">
									<span>Total</span> : Rp 100,000</a>
							</li>
							<li>
								<a href="#">
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
									<span>Status</span> : Diproses</a>
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Organisasi</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama Organisasi</span> : Neo Telemetri</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Waktu Pembayaran</span> : -</a>
							</li>
							<li>
								<a href="#">
									<span>Link Tiket</span> : Diproses</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Pembeli</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama</span> : Nama Lengkap</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Fakultas</span> : Teknik</a>
							</li>
							<li>
								<a href="#">
									<span>Jurusan </span> : Teknik Mesin</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detail Pembayaran</h2>
				<div class="table-responsive">
					<table class="table" width="100%">
						<thead>
							<tr>
								<th scope="col">Event</th>
								<th scope="col">Jenis</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Hackathon</p>
								</td>
								<td>
									<p>Reguler</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 50,000</p>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<p>VIP</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 100,000</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<h4>Total SEMUA</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 150,000</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
<?php
}
if ($_GET['page']==4){
?>
	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<div class="alert alert-danger" role="alert">
			  Maaf, tiket kamu ditolak mungkin dikarenakan kapasitas tiket sudah full atau hal lainnya, segera hubungi kami!
			</div>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Info Pembayaran</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Kode Pembayaran</span> : #xyz</a>
							</li>
							<li>
								<a href="#">
									<span>Tanggal Pemesanan</span> : 2 Januari 2019</a>
							</li>
							<li>
								<a href="#">
									<span>Total</span> : Rp 100,000</a>
							</li>
							<li>
								<a href="#">
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
									<span>Status</span> : Ditolak</a>
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Organisasi</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama Organisasi</span> : Neo Telemetri</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Waktu Pembayaran</span> : -</a>
							</li>
							<li>
								<a href="#">
									<span>Link Tiket</span> : Ditolak</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Pembeli</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama</span> : Nama Lengkap</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Fakultas</span> : Teknik</a>
							</li>
							<li>
								<a href="#">
									<span>Jurusan </span> : Teknik Mesin</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detail Pembayaran</h2>
				<div class="table-responsive">
					<table class="table" width="100%">
						<thead>
							<tr>
								<th scope="col">Event</th>
								<th scope="col">Jenis</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Hackathon</p>
								</td>
								<td>
									<p>Reguler</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 50,000</p>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<p>VIP</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 100,000</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<h4>Total SEMUA</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 150,000</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
<?php
}
if ($_GET['page']==5){
?>
	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<div class="alert alert-success" role="alert">
			  Terima kasih telah menggunakan kampuslink untuk pemesanan tiket, jika ada saran atau komentar tentang kami, silahkan kirimkan pesan melalui email@email.com .
			</div>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Info Pembayaran</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Kode Pembayaran</span> : #xyz</a>
							</li>
							<li>
								<a href="#">
									<span>Tanggal Pemesanan</span> : 2 Januari 2019</a>
							</li>
							<li>
								<a href="#">
									<span>Total</span> : Rp 100,000</a>
							</li>
							<li>
								<a href="#">
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
									<span>Status</span> : Pembayaran Berhasil</a>
									<!-- <span>Status</span> : Menunggu Pembayaran</a> -->
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Organisasi</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama Organisasi</span> : Neo Telemetri</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Waktu Pembayaran</span> : -</a>
							</li>
							<li>
								<a href="tiket.php" style="color: blue">
									<span>Link Tiket</span> : Klik Disini</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Pembeli</h4>
						<ul class="list">
							<li>
								<a href="#">
									<span>Nama</span> : Nama Lengkap</a>
							</li>
							<li>
								<a href="#">
									<span>Kampus</span> : Universitas Andalas</a>
							</li>
							<li>
								<a href="#">
									<span>Fakultas</span> : Teknik</a>
							</li>
							<li>
								<a href="#">
									<span>Jurusan </span> : Teknik Mesin</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detail Pembayaran</h2>
				<div class="table-responsive">
					<table class="table" width="100%">
						<thead>
							<tr>
								<th scope="col">Event</th>
								<th scope="col">Jenis</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Hackathon</p>
								</td>
								<td>
									<p>Reguler</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 50,000</p>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<p>VIP</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>Rp 100,000</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<h4>Total SEMUA</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 150,000</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
<?php
}
?>

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
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
<!-- js confirmasion.php -->
<script type="text/javascript">
$(document).ready(function () {
// Set the date we're counting down to
var countDownDate = new Date("Feb 3, 2019 8:59:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  // document.getElementById("getting-started").innerHTML = days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s ";
   document.getElementById("waktu_pembayaran").innerHTML = hours + ":"
  + minutes + ":" + seconds;

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("waktu_pembayaran").innerHTML = "KADALUARSA";
  }
}, 1000);
});
</script>
</body>

</html>