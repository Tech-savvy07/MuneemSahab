<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from separateweb.com/niwax-demo/business-and-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 19:36:41 GMT -->
@include('layout.head')

<body>
	<!--Start Preloader -->
	<div class="onloadpage" id="page_loader">
		<div class="pre-content">
			<div class="logo-pre"><img src="https://prayagrajxport.com/front_assets/images/pxlogo.png" alt="Logo" class="img-fluid" /></div>
			<div class="pre-text- text-radius text-light text-animation bg-b">Muneem Sahab | Solution of your Business </div>
		</div>
	</div>
	<!--End Preloader -->
	<!--Start Header -->
	@include('layout.header')
	<!--End Header -->
	@include('sweetalert::alert')

	@yield('content')

	<!--Start Footer-->
	@include('layout.footer')
	<!--End Footer-->

	<!-- js placed at the end of the document so the pages load faster -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/plugin.min.js"></script>
	<script src="js/preloader.js"></script>
	<script src="js/dark-mode.js"></script>
	<!--common script file-->
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from separateweb.com/niwax-demo/business-and-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 19:37:12 GMT -->

</html>