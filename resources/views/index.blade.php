@extends('layout.layout')

@section('content')

<!--Start sidebar -->
<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
	<div class="offcanvas-body">
		<div class="cbtn animation">
			<div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
		</div>
		<div class="form-block sidebarform">
			<h4>Request A Quote</h4>
			<form id="contactForm" data-bs-toggle="validator" class="shake mt20" method="post" action="/saveContact">
				@csrf
				<div class="row">
					<div class="form-group col-sm-12">
						<input type="text" id="name" name="name" placeholder="Enter name" required data-error="Please fill Out">
						<div class="help-block with-errors">
						@error('name')
						<span class="text-danger">{{ $message }}</span>
						@enderror
						</div>
						
					</div>
					<div class="form-group col-sm-12">
						<input type="email" id="email" name="email" placeholder="Enter email" required>
						<div class="help-block with-errors">
						@error('email')
						<span class="text-danger">{{ $message }}</span>
						@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
						<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
						<div class="help-block with-errors">
						@error('mobile')
						<span class="text-danger">{{ $message }}</span>
						@enderror
						</div>
					</div>
					<div class="form-group col-sm-12">
						<select name="Dtype" id="Dtype" required>
							<option value="">Select Requirement</option>
							<option value="web">web</option>
							<option value="graphic">graphic</option>
							<option value="video">video</option>
						</select>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<textarea id="message" rows="5" name="message" placeholder="Enter your message" required></textarea>
					<div class="help-block with-errors"></div>
				</div>
				<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
				<div id="msgSubmit" class="h3 text-center hidden"></div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="getintouchblock mt30">
			<h4>Get In Touch</h4>
			<p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
			<div class="media mt15">
				<div class="icondive"><img src="images/icons/call.svg" alt="icon"></div>
				<div class="media-body getintouchinfo">
					<a href="tel:123456790">{{$websiteSetting['mobile']}} <span>Mon-Fri 9am - 6pm</span></a>
				</div>
			</div>
			<div class="media mt15">
				<div class="icondive"><img src="images/icons/whatsapp.svg" alt="icon"></div>
				<div class="media-body getintouchinfo">
					<a href="tel:123456790">{{$websiteSetting['mobile']}} <span>Mon-Fri 9am - 6pm</span></a>
				</div>
			</div>
			<div class="media mt15">
				<div class="icondive"><img src="images/icons/mail.svg" alt="icon"></div>
				<div class="media-body getintouchinfo">
					<a href="https://separateweb.com/cdn-cgi/l/email-protection#254c4b434a65524047564c51400b464a48"><span class="__cf_email__" data-cfemail="7d14131b123d0a181f0e140918531e1210">{{$websiteSetting['email']}}</span> <span>Online Support</span></a>
				</div>
			</div>
			<div class="media mt15">
				<div class="icondive"><img src="images/icons/map.svg" alt="icon"></div>
				<div class="media-body getintouchinfo">
					<a href="https://separateweb.com/cdn-cgi/l/email-protection#8ce5e2eae3ccfbe9eeffe5f8e9a2efe3e1">{{$websiteSetting['address']}}<span>Visit Our Office</span></a>
				</div>
			</div>
		</div>
		<div class="contact-data mt30">
			<h4>Follow Us On:</h4>
			<div class="social-media-linkz mt10">
				<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
				<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
				<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
				<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
				<a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
				<a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
			</div>
		</div>
	</div>
</div>
<!--end sidebar -->

<!--Start Hero-->
<section class="hero-section business-startup">
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 v-center">
					<div class="header-heading">
						<h1 class="wow fadeInUp" data-wow-delay=".2s">Legal Consulting Toolkit</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.</p>
						<a href="#" class="btn-main bg-btn3 lnk wow fadeInUp" data-wow-delay=".6s">GET STARTED<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
					</div>
				</div>
				<div class="col-lg-6 v-center">
					<div class="hero-photo"><img src="images/hero/designer-girl-animate.svg" alt="img"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Hero-->
<!--Start Service-->
@if(isset($card) && !empty($card))
<section class="dg-service2 pb120 pt0 ">
	<div class="container">
		<div class="row upset ">

			@foreach($card as $item)
			<div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
				<div class="s-block up-hor pt20">
					<div class="nn-card-set">
						<div class="card-icon"><img src="images/icons/designer.svg" alt="service" class="img-fluid" /></div>
						<h4>{{$item['card_name']}}</h4>
						<p>{{$item['card_description']}}</p>
						<!-- <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a> -->
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@endif
<!--End Service-->

<!--Start Blogs-->
<section class="blogs-section bg-flat6 pb120 pt120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading-2">
					<span class="text-effect-1">what's going on</span>
					<h2 class="mb30">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-lg-4 mt30">
				<div class="single-blog-post- up-hor shdo">
					<div class="single-blog-img-">
						<a href="#"><img src="images/blog/blog-dg-1.jpg" alt="girl" class="img-fluid" /></a>
					</div>
					<div class="blog-content-tt pt20">
						<div class="single-blog-info-">
							<!-- <p class="mb10"><i class="fas fa-clock"></i> Sep 23, 2020</p> -->
							<h4><a href="#">Book keeping & Accounting</a></h4>
							<p><b>Call - </b> {{$websiteSetting['mobile']}} </p>
						</div>
						<!-- <div class="post-social">
							<div class="ss-inline-share-content">
								<div class="ss-social-icons-container">
									<a href="javascript:void(0)">Shares</a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt30">
				<div class="single-blog-post- up-hor shdo">
					<div class="single-blog-img-">
						<a href="#"><img src="images/blog/blog-dg-2.jpg" alt="girl" class="img-fluid" /></a>
					</div>
					<div class="blog-content-tt pt20">
						<div class="single-blog-info-">
							<!-- <p class="mb10"><i class="fas fa-clock"></i> Sep 23, 2020</p> -->
							<h4><a href="#">Return filing</a></h4>
							<p><b>Make an appointment</b></p>
						</div>
						<!-- <div class="post-social">
							<div class="ss-inline-share-content">
								<div class="ss-social-icons-container">
									<a href="javascript:void(0)">Shares</a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>

			<div class="col-lg-4 mt30">
				<div class="single-blog-post- up-hor shdo">
					<div class="single-blog-img-">
						<a href="#"><img src="images/blog/blog-dg-3.jpg" alt="girl" class="img-fluid" /></a>
					</div>
					<div class="blog-content-tt pt20">
						<div class="single-blog-info-">
							<!-- <p class="mb10"><i class="fas fa-clock"></i> Sep 23, 2020</p> -->
							<h4><a href="#">Working Time</a></h4>
							<p>Monday - Friday : 9 am to 6 pm</p>
						</div>
						<!-- <div class="post-social">
							<div class="ss-inline-share-content">
								<div class="ss-social-icons-container">
									<a href="javascript:void(0)">Shares</a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
									<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!--End Blogs-->

<section class="about-dg-busign pb120 pt120 bg-light-ylo upset">
	<div class="up-curvs"><svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#e9f5ff">
			<path d="M1919.5,89.5H-0.5c0,0,0-90,0-90c114.9,4.8,228.6,17.9,343.6,24.6c118.6,7,237.4,11.9,356.1,14.7
c237.6,5.7,475.3,3.1,712.7-7.7c164.2-7.5,328.1-23.7,492.3-31c0.7,0,15.2-0.5,15.2-0.6C1919.5-0.5,1919.5,89.5,1919.5,89.5z" />
		</svg>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 v-center">
				<div class="common-heading-2 text-l">
					<span class="text-effect-1">We Are Creative Agency</span>
					<h2 class="mb20">Work Together For Success</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
				</div>
			</div>
			<div class="col-lg-6 v-center">
				<img src="images/about/finance-cuate.svg" alt="img" class="img-fluid">
			</div>
			<div class="col-lg-6 v-center mt40 order2">
				<img src="images/about/businessplan.svg" alt="img" class="img-fluid">
			</div>
			<div class="col-lg-6 v-center mt40 order1">
				<div class="common-heading-2 text-l">
					<span class="text-effect-1">We Are Creative Agency</span>
					<h2 class="mb20">We Craft Beautiful Digital Experiences</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-curvs">
		<svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#e9f5ff">
			<path d="M1919.5-0.5H-0.5c0,0,0,90,0,90c114.9-4.8,228.6-17.9,343.6-24.6c118.6-7,237.4-11.9,356.1-14.7
c237.6-5.7,475.3-3.1,712.7,7.7c164.2,7.5,328.1,23.7,492.3,31c0.7,0,15.2,0.5,15.2,0.6C1919.5,89.5,1919.5-0.5,1919.5-0.5z" />
		</svg>
	</div>
</section>
<!--Start Portfolio-->
<section class="dg-portfolio-section pb120 pt120">
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-lg-8">
				<div class="common-heading-2">
					<span class="text-effect-1">Our Work</span>
					<h2 class="mb0">Our Services</h2>
				</div>
			</div>
		</div>
		@if(isset($service) && !empty($service))

		<div class="row">
			@foreach($service as $item)
			<div class="col-lg-4 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".2s">
				<div class="isotope_item h-scl-">
					<div class="item-image h-scl-base">
						<a href="#"><img src="images/portfolio/image-1.jpg" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">{{$item['service_name']}}</a></h4>
						<p> {{$item['service_description']}}</p>
					</div>
				</div>
			</div>
			@endforeach

		</div>
		@endif
	</div>
</section>
<!--End Portfolio-->
<!--Start Clients-->
<section class="dg-clients-section  bg-flat5 pb120 pt120 upset">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading-2">
					<span class="text-effect-1">Our happy customers</span>
					<h2 class="mb30">Some of Our Partners</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="opl">
					<ul class="row text-center clearfix">
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s">
							<div class="brand-logo"><img src="images/client/logo1.png" alt="clients" class="img-fluid"></div>
							<p>Shutter, USA</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".4s">
							<div class="brand-logo"><img src="images/client/logo2.png" alt="clients" class="img-fluid"></div>
							<p>Hipster, USA</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".6s">
							<div class="brand-logo"><img src="images/client/logo3.png" alt="clients" class="img-fluid"></div>
							<p>Happy, USA</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".8s">
							<div class="brand-logo"><img src="images/client/logo4.png" alt="clients" class="img-fluid"></div>
							<p>Opera Tours, USA</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1s">
							<div class="brand-logo"><img src="images/client/logo5.png" alt="clients" class="img-fluid"></div>
							<p>Royale Stone, UK</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.2s">
							<div class="brand-logo"><img src="images/client/logo6.png" alt="clients" class="img-fluid"></div>
							<p>QTP, Australia</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.4s">
							<div class="brand-logo"><img src="images/client/logo7.png" alt="clients" class="img-fluid"></div>
							<p>PAPA, Malaysia</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.6s">
							<div class="brand-logo"><img src="images/client/logo8.png" alt="clients" class="img-fluid"></div>
							<p>Coffee, Australia</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.8s">
							<div class="brand-logo"><img src="images/client/logo9.png" alt="clients" class="img-fluid"></div>
							<p>Bakery, India</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2s">
							<div class="brand-logo"><img src="images/client/logo10.png" alt="clients" class="img-fluid"></div>
							<p>Iconico, India</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.2s">
							<div class="brand-logo"><img src="images/client/logo11.png" alt="clients" class="img-fluid"></div>
							<p>Tom N Jerry, UK</p>
						</li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.4s">
							<div class="brand-logo"><img src="images/client/logo12.png" alt="clients" class="img-fluid"></div>
							<p>Arch, India</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Clients-->
<!--Start Testinomial-->
<section class="dg-testinomial-section  pb120 pt120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading-2">
					<span class="text-effect-1">Our happy customers</span>
					<h2 class="mb30">Customer Testimonials</h2>
				</div>
			</div>
		</div>
		<div class="row mt60">
			<div class="col-lg-6">
				<div class="video-testimonial">
					<div class="video-review hover-scale mr15">
						<a class="video-link" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><img src="images/client/client-pic.jpg" alt="client" class="img-fluid">
							<div class="review-vid-details">
								<div class="-vid-ico"><span class="triangle-play2"></span></div>
								<p>Cina Cleaves</p>
							</div>
						</a>
					</div>
					<div class="video-review hover-scale">
						<a class="video-link" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><img src="images/client/client-pic-a.jpg" alt="client" class="img-fluid">
							<div class="review-vid-details">
								<div class="-vid-ico"><span class="triangle-play2"></span></div>
								<p>Jokvch Marlin</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="owl-carousel testimonial-card-a pl25">
					<div class="testimonial-card">
						<div class="client-thumbs">
							<div class="media v-center ">
								<div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl" class="img-fluid" /></div>
								<div class="media-body user-info v-center">
									<h5>Mike Smith</h5>
									<p>Business Owner, <small>Sydney, Australia</small></p>
								</div>
								<i class="fas fa-quote-right quote-css"></i>
							</div>
						</div>
						<div class="t-text mt30">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
						<div class="link-reviewrr"><a href="#">Read Project Case Study <i class="fas fa-chevron-right fa-icon"></i></a></div>
					</div>
					<div class="testimonial-card">
						<div class="client-thumbs">
							<div class="media v-center ">
								<div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl" class="img-fluid" /></div>
								<div class="media-body user-info v-center">
									<h5>Mike Smith</h5>
									<p>Business Owner, <small>Sydney, Australia</small></p>
								</div>
								<i class="fas fa-quote-right quote-css"></i>
							</div>
						</div>
						<div class="t-text mt30">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
						<div class="link-reviewrr"><a href="#">Read Project Case Study <i class="fas fa-chevron-right fa-icon"></i></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Testinomial-->


@endsection('content')