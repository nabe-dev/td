<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>Dominio</title>
    <meta name="description" content="">	
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Template styles-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Responsive styles-->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Animation -->
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Prettyphoto -->
  <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
	<!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
	<!-- Flexslider -->
  <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('css/cd-hero.css') }}">
	<!-- Style Swicther -->
  <link id="style-switch" href="{{ asset('css/presets/preset1.css') }}" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->  
	

</head>
	
<body>

	<div class="body-inner">
	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header2" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand">
					    <a href="/">
					    	<img class="img-responsive" src="images/logo3.png" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest                                
        </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

  <main class="py-4" >
      @yield('content')
  </main>
	<!-- Footer start -->
	<section id="copyright" class="copyright angle">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="footer-social unstyled">
              <li>
                <a title="Twitter" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
                </a>
                <a title="Facebook" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
                </a>
                <a title="Google+" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
                </a>
                <a title="linkedin" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
                </a>
                <a title="Pinterest" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
                </a>
                <a title="Skype" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
                </a>
                <a title="Dribble" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
                </a>
              </li>
            </ul>
          </div>
        </div><!--/ Row end -->
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright-info">
                  &copy; Copyright 2019 Themefisher. <span>Designed by <a href="https://themefisher.com">Themefisher.com</a></span>
                </div>
          </div>
        </div><!--/ Row end -->
         <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix" style="bottom:140px;right:45px;">
          <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
        </div>
      </div><!--/ Container end -->
    </section><!--/ Footer end -->
  
    <!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
  <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<!-- Bootstrap jQuery -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Style Switcher -->
  <script type="text/javascript" src="{{ asset('js/style-switcher.js') }}"></script>
	<!-- Owl Carousel -->
  <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
	<!-- PrettyPhoto -->
  <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
	<!-- Bxslider -->
  <script type="text/javascript" src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<!-- Owl Carousel -->
  <script type="text/javascript" src="{{ asset('js/cd-hero.js') }}"></script>
	<!-- Isotope -->
  <script type="text/javascript" src="{{ asset('js/isotope.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/ini.isotope.js') }}"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
	<!-- SmoothScroll -->
  <script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</div><!-- Body inner end -->	

<!-- WhatsChat.co widget -->

<script type="text/javascript">

	(function () {var options = {
	
	whatsapp: "5493884968237", // WhatsApp number 
	
	position: "right", // Position may be 'right' or 'left'.
	
	image: "", //Image to display. Leave blank to display whatsapp defualt icon
	
	text:"Obtener Botón",
	
	link_to:"https://whatschat.co"};
	
	var proto = document.location.protocol, host = "https://whatschat.co", url = host;
	
	var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/whatsapp/init4.js';
	
	s.onload = function () { getbutton(host, proto, options); };
	
	var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
	
	})();</script>
	
	<!-- WhatsChat.co widget -->


</body>
</html>