<?php include"header.php" ?> 
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Shopping Cart</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="cart.html">Cart</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Event</th>
								<th scope="col">Jenis</th>
								<th scope="col">Harga</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="media">
										<div class="d-flex">
											Firetech	
										</div>
										<div class="media-body">
											<p>Lomba Hackathon</p>
										</div>
									</div>
								</td>
								<td>
									<span class="jenis">Reguler</span>
								</td>
								<td>
									<h5>Rp 25,000</h5>
								</td>
								<td>
									<div class="product_count">
										<input type="text" name="qty1" id="sst" maxlength="12" value="0" title="Quantity:" class="input-text qty">
										<input type="hidden" id="qty_1">
										<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count btn-plus-1" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count btn-min-1" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button>
									</div>
								</td>
								<td>
									<h5>Rp <span id="total-1">0</span></h5>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<span class="jenis">VIP</span>
								</td>
								<td>
									<h5>Rp 35,000</h5>
								</td>
								<td>
									<div class="product_count">
										<input type="text" name="qty2" id="sst2" maxlength="12" value="0" title="Quantity:" class="input-text qty">
										<input type="hidden" id="qty_2">
										<button onclick="var result = document.getElementById('sst2'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count btn-plus-2" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst2'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count btn-min-2" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button>
									</div>
								</td>
								<td>
									<h5>Rp <span id="total-2">0</span></h5>
								</td>
							</tr>
							<tr>
								<td>

								</td>
								<td>
									
								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
									<h5>Rp <span id="subtotal">0</span></h5>
								</td>
							</tr>
							<tr class="out_button_area">
								<td>
									
								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td align="right">
									<div class="checkout_btn_inner">
										<!-- <a class="gray_btn" href="#">Continue Shopping</a> -->
										<a class="main_btn" href="confirmation.php">Proceed to checkout</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->

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
<!-- script untuk cart -->
<script>
$(document).ready(function(){
	// reguler
	$('#sst').on("keyup", function(){jumlah_1();subtotal()});
	$('.btn-plus-1').click(function(){jumlah_1();subtotal()});
	$('.btn-min-1').click(function(){jumlah_1();subtotal()});
	function jumlah_1(){	
		var qty = $('#sst').val();
		var reguler = 25000;
		var total = qty*reguler;
		$('#total-1').text(new Intl.NumberFormat('en-CA', {style: 'decimal'}).format(total));
		$('#qty_1').val(total);
	}
	// VIP
	$('#sst2').on("keyup", function(){jumlah_2();subtotal()});
	$('.btn-plus-2').click(function(){jumlah_2();subtotal()});
	$('.btn-min-2').click(function(){jumlah_2();subtotal()});
	function jumlah_2(){	
		var qty = $('#sst2').val();
		var reguler = 35000;
		var total = qty*reguler;
		$('#total-2').text(new Intl.NumberFormat('en-CA', {style: 'decimal'}).format(total));
		$('#qty_2').val(total);
	}
	// subtotal
	function subtotal(){
		var subtotal = 0; 
		var qty_1 = parseInt($('#qty_1').val());
		var qty_2 = parseInt($('#qty_2').val());
		if (!qty_1) {
			subtotal = qty_2;
		}
		else if (!qty_2){
			subtotal = qty_1;
		}
		else{
			subtotal = qty_1+qty_2;
		}	
		// alert(subtotal);
		$('#subtotal').text(new Intl.NumberFormat('en-CA', {style: 'decimal'}).format(subtotal));
	}
});
</script>
</body>

</html>