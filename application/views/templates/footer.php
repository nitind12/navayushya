
	

	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids pt-sm-4 pt-3">
			<div class="container py-xl-5 py-lg-3">
				<div class="row">
					<div class="col-md-5 w3l-footer">
						<h2 class="mb-sm-3 mb-2">
							<a href="#" class="text-white font-italic font-weight-bold">
								<img src="<?php echo base_url('assets/images/logo.png');?>" style="max-width: 350px;">
							</a>
						</h2>	
						<ul class="top-right-info" style="margin-left:3.5em !important">
								<li>
									<a href="https://www.facebook.com/navayushya/?modal=admin_todo_tour" target="_blank">
										<i class="fab fa-facebook-f fa-2x"></i>
									</a>
								</li>
								<li class="ml-3">
									<a href="https://twitter.com/navayushya" target="_blank">
										<i class="fab fa-twitter fa-2x"></i>
									</a>
								</li>
								<li class="ml-3">
									<a href="#">
									<i class="fab fa-tripadvisor fa-2x"></i>
									</a>
								</li>
								<li class="ml-3">
									<a href="#">
										<i class="fab fa-linkedin-in fa-2x"></i>
									</a>
								</li>								
							</ul>					
					</div>
					<div class="col-md-4 w3l-footer my-md-0 my-4">
						<h3 class="mb-sm-3 mb-2 text-white">Address</h3>
						<ul class="list-unstyled">
							<li>
								<i class="fas fa-location-arrow float-left"></i>
								<p class="ml-4">Navayushya
									<span>Navayushya Kerala Ayurveda, Munirka, New Delhi - 67</span>
								</p>																
								<div class="clearfix"></div>
							</li>
							<li class="my-3">								
								<i class="fas fa-location-arrow float-left"></i>
								<p class="ml-4">
									<span>The Kikar Lodge, Ropar, Punjab</span>
								</p>
								<div class="clearfix"></div>
							</li>
							<li class="my-3">
								<i class="fas fa-phone float-left"></i>
								<p class="ml-4">+91 8527008995</p>
								<div class="clearfix"></div>
							</li>
							<li>
								<i class="far fa-envelope-open float-left"></i>
								<a href="mailto:info@navayushya.in" class="ml-3">mail@navayushya.in</a>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer">
						<h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li>
									<a href="#">Home</a>
								</li>
								<li class="mt-2">
									<a href="#">About Us</a>
								</li>
								<li class="mt-2">
									<a href="#">Treatment Packages</a>
								</li>								
								<li class="mt-2">
									<a href="#">Wellness Therepies</a>
								</li>
								<li class="mt-2">
									<a href="#">Beauty Therepies</a>
								</li>
								<li class="mt-2">
									<a href="#">Buy a medicine - Delhi NCR</a>
								</li>
								<li class="mt-2">
									<a href="#">Consultancy </a>
								</li>
								<li class="mt-2">
									<a href="#">Career</a>
								</li>
								<li class="mt-2">
									<a href="#">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
					<p class="copy-right-grids mt-lg-1">© 2019 Navayushya. All Rights Reserved | Developed by
						<a href="https://www.teamfreelancers.com/" target="_blank">Teamfreelancers.com</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="<?php echo base_url('assets/js/responsiveslides.min.js');?>"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	 <script>
		$(document).ready(function() {		
			$('.aiwhatsapp').hover(function(){
				$('.aiwhatsapp').css('right', '-5px');
			}, function() {
				$('.aiwhatsapp').css('right', '-75px');
			});															
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="<?php echo base_url('assets/js/fixed-nav.js');?>"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="<?php echo base_url('assets/js/SmoothScroll.min.js');?>"></script>
	<!-- move-top -->
	<script src="<?php echo base_url('assets/js/move-top.js');?>"></script>
	<!-- easing -->
	<script src="<?php echo base_url('assets/js/easing.js');?>"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="<?php echo base_url('assets/js/medic.js');?>"></script>

	<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->


	<a href="https://wa.me/918848644306&text=Hi Navayusha, I would like to inquire about" class="aiwhatsapp" target="_blank"><img src="<?php echo base_url('assets/images/whatsapp_navayusha.png');?>" style="max-width: 120px"></a>
</body>

</html>