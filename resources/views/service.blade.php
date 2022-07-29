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
<!--Start work-category-->
<section class="work-category pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>We Have Worked with multiple clients</span>
                    <h2>Mutual Funds</h2>
                    <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="row mt30">
            @if(isset($insuranceTypes))
            @foreach($insuranceTypes as $item)
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s">
                <div class="industry-workfor hoshd">
                    <img src="images/icons/money-growth.svg" alt="img">
                    <h6>{{$item['name']}}</h6>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<!--End  work-category-->


<!--Start Clients-->
<section class="dg-clients-section  bg-flat5 pb120 pt120 upset">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading-2">
					<span class="text-effect-1">Our happy customers</span>
					<h2 class="mb30">Some of Our Investors</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="opl">
					<ul class="row text-center clearfix">
                    @if(isset($mutualFundPartners))
                    @foreach($mutualFundPartners as $item)

						<li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s">
							<div class="brand-logo"><img src="images/client/logo1.png" alt="clients" class="img-fluid"></div>
							<p>{{$item['name']}}</p>
						</li>
                    @endforeach
                    @endif
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Clients-->
@endsection('content')