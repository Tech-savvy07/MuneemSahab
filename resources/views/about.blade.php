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
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{$page->page_url}}">{{$page->page_name}}</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>{{$page->page_short_desc}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start About-->
<section class="about-agency pad-tb block-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="about-image">
                    <img src="images/about/company-about.png" alt="about us" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="common-heading text-l ">
                    <span>{{$page->page_name}}</span>
                    <!-- <h2>About Agency</h2> -->
                    <p>{{$page->page_long_desc}}</p>
                </div>
                <!-- <div class="row in-stats small about-statistics">
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics">
                            <div class="statnumb counter-number">
                                <span class="counter">450</span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics">
                            <div class="statnumb">
                                <span class="counter">95</span><span>k</span>
                                <p>Hours Worked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics mb0">
                            <div class="statnumb counter-number">
                                <span class="counter">850</span>
                                <p>Projects Done</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!--End About-->
<!--Start why-choose-->
<section class="why-choose pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading">
                    <span>We Are Awesome</span>
                    <h2 class="mb30">Why Choose Us</h2>
                </div>
            </div>
        </div>
        <div class="row upset">
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="images/icons/research.svg" alt="service" class="img-fluid" /></div>
                    <h4>Reasearch and Analysis</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="images/icons/chat.svg" alt="service" class="img-fluid" /></div>
                    <h4>Negotiation and power</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="images/icons/monitor.svg" alt="service" class="img-fluid" /></div>
                    <h4>Creative and innovative solutions</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="images/icons/trasparency.svg" alt="service" class="img-fluid" /></div>
                    <h4>Trasparency and ease of work</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End why-choose-->


@endsection('content')