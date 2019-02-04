<?php include"header.php" ?>
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Profil</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="login.html">Profil</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Profil Box Area =================-->
	<section class="profil_box_area p_120">
		<div class="container">
			<div class="row" style="position: relative;overflow: hidden;padding-bottom: 0.4em;">
				<div class="col-lg-6 profil-form">
					<div class="pilihan">
						<!-- <h4>Atur</h4> -->
						<button class="btn-profil">Profil</button>
						<button class="btn-kampus">Kampus</button>
						<button class="btn-login">Login</button>
					</div>
					<!-- =======FORM PROFIL======= -->
					<div class="login_form_inner reg_form" id="form-profil">
						<h3>Edit Profil</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" placeholder="Nama">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" placeholder="Nomor HP">
							</div>
							<div class="col-md-12 form-group">
								<input type="date" class="form-control" placeholder="TTL">
							</div>
							<div class="col-md-12 i-radio">
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								  <label class="form-check-label" for="exampleRadios1">
								    Laki-laki
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								  <label class="form-check-label" for="exampleRadios2">
								    Perempuan
								  </label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Simpan</button>
							</div>
						</form>
					</div>
					<!-- =======FORM KAMPUS======= -->
					<div class="login_form_inner reg_form" id="form-kampus">
						<h3>Edit Kampus</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" placeholder="Nomor BP/NIM">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" placeholder="Kampus">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" placeholder="Fakultas">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" placeholder="Jurusan">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Simpan</button>
							</div>
						</form>
					</div>
					<!-- =======FORM LOGIN======= -->
					<div class="login_form_inner reg_form" id="form-login">
						<h3>Edit Akun Login</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email@email.com">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="Konfirmasi password">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Simpan</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6 profil-view">
					<div class="login_form_inner profil">
						<table width="100%">
							<tr>
								<th align="left">Akun Profil</th>
								<th></th>
							</tr>
							<tr>
								<td align="left">Nama</td>
								<td align="left">Nama Lengkap</td>
							</tr>
							<tr>
								<td align="left">Hp</td>
								<td align="left">081263000000</td>
							</tr>
							<tr>
								<td align="left">TTL</td>
								<td align="left">1 Januari 2019</td>
							</tr>
							<tr>
								<td align="left">Jenis Kelamin</td>
								<td align="left">Laki-laki</td>
							</tr>
							<tr>
								<th align="left">Akun Kampus</th>
								<th></th>
							</tr>
							<tr>
								<td align="left">Nomor BP/NIM</td>
								<td align="left">19191919</td>
							</tr>
							<tr>
								<td align="left">Kampus</td>
								<td align="left">Universitas Andalas</td>
							</tr>
							<tr>
								<td align="left">Fakultas</td>
								<td align="left">Teknik</td>
							</tr>
							<tr>
								<td align="left">Jurusan</td>
								<td align="left">Teknik Mesin</td>
							</tr>
							<tr>
								<td align="left">Status</td>
								<td align="left">Belum Diverivikasi</td>
							</tr>
							<tr>
								<th align="left">Akun Login</th>
								<th></th>
							</tr>
							<tr>
								<td align="left">Email</td>
								<td align="left">email@email.com</td>
							</tr>
							<tr>
								<td align="left">Password</td>
								<td align="left">********</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="col-lg-6 profil-atur">
					<div class="img-edit">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="edit">
							<button class="editx">Kembali</button>
							<button class="btn-edit">Edit Akun</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================End Profil Box Area =================-->

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
<script>
$(document).ready(function(){	
	$('button.btn-edit').click(function(){
		$('.profil-atur').addClass('profil-atur2');
		$(this).css('display','none');
		$('button.editx').css('display','block');
	});
	$('button.editx').click(function(){
		$('.profil-atur').removeClass('profil-atur2');
		$(this).css('display','none');
		$('button.btn-edit').css('display','block');
	});
	// v-tampil
	// v-tutup
	$('button.btn-profil').click(function(){
		$('#form-kampus').addClass('v-tutup');
		$('#form-login').addClass('v-tutup');
		$('#form-profil').addClass('v-tampil');

		$('#form-kampus').removeClass('v-tampil');
		$('#form-login').removeClass('v-tampil');
		$('#form-profil').removeClass('v-tutup');
	});
	$('button.btn-kampus').click(function(){
		$('#form-kampus').addClass('v-tampil');
		$('#form-login').addClass('v-tutup');
		$('#form-profil').addClass('v-tutup');

		$('#form-kampus').removeClass('v-tutup');
		$('#form-login').removeClass('v-tampil');
		$('#form-profil').removeClass('v-tampil');
	});
	$('button.btn-login').click(function(){
		$('#form-kampus').addClass('v-tutup');
		$('#form-login').addClass('v-tampil');
		$('#form-profil').addClass('v-tutup');

		$('#form-kampus').removeClass('v-tampil');
		$('#form-login').removeClass('v-tutup');
		$('#form-profil').removeClass('v-tampil');
	});
});
</script>
</body>

</html>