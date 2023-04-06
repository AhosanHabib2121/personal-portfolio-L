<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from harnishdesign.net/demo/html/callum/index-bottom-header-image-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 08:23:23 GMT -->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="{{asset('upload-photos/favicon')}}/{{App\Models\Logo_and_favicon::first()->favicon}}" rel="icon" />
<title>{{env('APP_NAME')}}</title>
<meta name="description" content="Callum is responsive bootstrap 5 one page personal portfolio html template.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================== -->
<!-- Animate -->
<link rel="stylesheet" type="text/css" href="{{asset('portfolio-file')}}/vendor/animate/animate.min.css" />
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{asset('portfolio-file')}}/vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="{{asset('portfolio-file')}}/vendor/font-awesome/css/all.min.css" />
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="{{asset('portfolio-file')}}/vendor/owl.carousel/assets/owl.carousel.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="{{asset('portfolio-file')}}/vendor/magnific-popup/magnific-popup.min.css" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{asset('portfolio-file')}}/css/stylesheet.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
=============================== -->
<div id="main-wrapper">

  <!--Main Content start-->
  @yield('main_content')
  <!--Main Content end -->


  <!-- Footer
  ============================================= -->
  <footer id="footer" class="section bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center text-lg-start wow fadeInUp">
          <p class="mb-2 mb-lg-0">Copyright © {{date('Y')}} . All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 wow fadeInUp">
          <p class="mb-0 text-center text-lg-end">Developer by <a class="fw-600" href="{{route('index')}}">Ahosan Habib</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" class="rounded-circle" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fas fa-arrow-up"></i></a>

<!-- JavaScript -->
<script src="{{asset('portfolio-file')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('portfolio-file')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Easing -->
<script src="{{asset('portfolio-file')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
<!-- Appear -->
<script src="{{asset('portfolio-file')}}/vendor/jquery.appear/jquery.appear.min.js"></script>
<!-- WOW animation -->
<script src="{{asset('portfolio-file')}}/vendor/wow/wow.min.js"></script>
<!-- Images Loaded -->
<script src="{{asset('portfolio-file')}}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Typed -->
<script src="{{asset('portfolio-file')}}/vendor/typed/typed.min.js"></script>
<!-- Parallax Bg -->
<script src="{{asset('portfolio-file')}}/vendor/parallaxie/parallaxie.min.js"></script>
<!-- Owl Carousel -->
<script src="{{asset('portfolio-file')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
<!-- isotope Portfolio Filter -->
<script src="{{asset('portfolio-file')}}/vendor/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('portfolio-file')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Style Switcher -->
<script src="{{asset('portfolio-file')}}/js/switcher.min.js"></script>
<!-- Custom Script -->
<script src="{{asset('portfolio-file')}}/js/theme.js"></script>

<!-- js code start here -->
@yield('use_for_js_code')
<!-- js code end here -->

</body>
<!-- Mirrored from harnishdesign.net/demo/html/callum/index-bottom-header-image-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 08:23:54 GMT -->
</html>
