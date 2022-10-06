@extends('front.layouts.app')
@section('content')
     <x-header />
	<div id="page">
		
		<!-- Begin Main -->
         
		<div role="main" class="main pgl-bg-grey">
               @foreach ($data as $item)
               @if ($item->status == 'active')
               <h2>About Us</h2>
					<img src="{{ asset('admin/assets/images/brand/dribbble-1.jpg')}}" alt="Photo" class="img-responsive">
			<section class="pgl-intro">
				<div class="container">
                        
					
					<div class="lead pgl-bg-light text-center">
						<p>Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam consectetur lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes</p>
					</div>
				</div>
			</section>
			
			<!-- Begin About -->
			<section class="pgl-offer">
				<div class="container">
					<h2>We offer</h2>
					<div class="row">
						<div class="col-md-4 animation">
							<div class="offer-item pgl-bg-light">
								<div class="offer-item-inner">
									<p><i class="icons icon-hand"></i></p>
									<h3>Brokerage Services</h3>
									<p>Perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 animation">
							<div class="offer-item pgl-bg-light">
								<div class="offer-item-inner">
									<p><i class="icons icon-home"></i></p>
									<h3>Real Estate Management</h3>
									<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 animation">
							<div class="offer-item pgl-bg-light">
								<div class="offer-item-inner">
									<p><i class="icons icon-chart"></i></p>
									<h3>Construction &amp; Development</h3>
									<p>Unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End About -->
			
			<!-- Begin testimonial -->
			{{-- <section class="pgl-testimonials pgl-testimonials-full">
				<div class="container">
					<h2>Happy Clients</h2>
					<div class="owl-carousel pgl-bg-dark pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
						<div class="row">
							<div class="col-sm-4">
								<div class="testimonial-author">
									<div class="img-thumbnail-small img-circle">
										<img src="images/agents/agent-1.jpg" class="img-circle" alt="Andrew MCCarthy">
									</div>
									<h4>Andrew MCCarthy</h4>
									<p><strong>Selller</strong></p>
								</div>
							</div>
							<div class="col-sm-8">
								<blockquote class="testimonial">
									<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam. Lorem ipsum dolor sit amet, feugiat delicat liberavisse id cum, no quo maiorum intellegebat, liber regione.</p>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="testimonial-author">
									<div class="img-thumbnail-small img-circle">
										<img src="images/agents/agent-1.jpg" class="img-circle" alt="Andrew MCCarthy">
									</div>
									<h4>John Smith</h4>
									<p><strong>Selller</strong></p>
								</div>
							</div>
							<div class="col-sm-8">
								<blockquote class="testimonial">
									<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam. Lorem ipsum dolor sit amet, feugiat delicat liberavisse id cum, no quo maiorum intellegebat, liber regione.</p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</section> --}}
			<!-- End testimonial -->
			
			<!-- Begin testimonial -->
			{{-- <section class="pgl-teams">
				<div class="container">
					<h2>Our Team</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br>veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="#"><img src="images/agents/team-1.jpg" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Sale Director</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="#">View profile</a>
								</div>
								
							</div>
						</div>
						
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="#"><img src="images/agents/team-1.jpg" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Sale Director</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="#">View profile</a>
								</div>
								
							</div>
						</div>
						
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="#"><img src="images/agents/team-1.jpg" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Sale Director</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="#">View profile</a>
								</div>
								
							</div>
						</div>
						
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="#"><img src="images/agents/team-1.jpg" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Sale Director</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="#">View profile</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section> --}}
			<!-- End testimonial -->
               @endif
               @endforeach
		</div>
         
		<!-- End Main -->
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="vendor/jquery.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<script src="vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
	<script src="vendor/gmap/gmap3.infobox.min.js"></script>
	
	<!-- Theme Initializer -->
	<script src="js/theme.plugins.js"></script>
	<script src="js/theme.js"></script>
	
	<!-- Style Switcher -->
	<script type="text/javascript" src="style-switcher/js/switcher.js"></script>
	
</body>

<!-- Mirrored from pixelgeeklab.com/html/realestast/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2022 11:38:55 GMT -->
</html>