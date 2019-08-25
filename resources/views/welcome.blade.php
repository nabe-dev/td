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
	
	
	<link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">


<style>
.navbar-collapse {
    max-height: 380px;
}

@media screen and (max-width: 780px) {
.capa_a_ocultar{
		display: none;
	}
}

@media screen and (min-width: 780px) {
.capa_a_mostrar{
		display: none;
	}
}

@media screen and (min-width: 780px) {
.li_mostrar {
	visibility: hidden;
	width: 0px;
	}
}

@media screen and (max-width: 780px) {
.li_ocultar {
	visibility: hidden;
	height: 0px;
	}
}


</style>


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
					    	<img class="img-responsive" src="images/logo.png" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<div id="navbarResponsive" class="collapse navbar-collapse">
					<nav class="collapse navbar-collapse clearfix" role="navigation">
						<ul class="nav navbar-nav navbar-right text-uppercase ml-auto">
							<li class="nav-item">
								   <a id="ini" class="nav-link js-scroll-trigger active" href="#inicio" >Inicio</a>
							</li>
							<li class="nav-item li_ocultar">
								<a id="serv" class="nav-link js-scroll-trigger active " href="#servicios" >Servicios</a>
							</li>
							<li class="nav-item li_mostrar">
								<a id="serv" class="nav-link js-scroll-trigger active " href="#servicios2" >Servicios</a>
							</li>
							<li class="nav-item">
								<a id="nos" class="nav-link js-scroll-trigger active" href="#nosotros" >Sobre Nosotros</a>
							 </li>
							 <li class="nav-item">
									<a id="porta" class="nav-link js-scroll-trigger active" href="#portafolio">Portafolio</a>
							 </li>
							 <li class="nav-item">
								<a id="equipo" class="nav-link js-scroll-trigger active" href="#team" >Nuetro equipo</a>
							 </li>	                    
							<li class="nav-item">
								<a id="cont" class="nav-link js-scroll-trigger active" href="#contacto" >Contacto</a></li>
							<li ></li>
						</ul>
					</nav><!--/ Navigation end -->
				</div>
				
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

	<!-- Slider start -->
	<section id="inicio" class="no-padding">	

    	<div id="main-slide" class="ts-flex-slider">

			<div class="flexSlideshow flexslider">
				<ul class="slides">
					<li>
						<div class="overlay2">
							<img class="" src="images/slider/bg1.jpg" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
								@if(session()->has('flash'))
									<div class="alert alert-success">
										<strong>Exito!</strong> {{ session('flash') }}
									</div>                          
								@endif
	                    		<h2 class="animated2">
                            		DISEÑO Y DESARROLLO <br><br> DE SITIOS WEB  
	                        	</h2>
	                            <h3 class="animated3">
	                            	
	                            </h3>
	                            <!-- <p class="animated4"><a href="#" class="slider btn btn-primary white">Check Now</a></p> -->
	                        </div>
	                    </div>
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="images/slider/bg2.jpg" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                            <h2 class="animated4">
									¡Impulsa tu negocio hacia el próximo nivel!
	                            </h2>
	                            <h3 class="animated5">
										Estrategia de Publicidad Online, segmentación de audiencia y posicionamiento.
	                            </h3>		
	                            <!-- <p class="animated6"><a href="#" class="slider btn btn-primary white">Buy Now</a></p>	-->
	                        </div>
	                    </div>
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="images/slider/bg3.jpg" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                            <h2 class="animated7">
										SU DESAFÍO ES NUESTRO PROGRESO
	                            </h2>
	                            <h3 class="animated8">
										Por lo tanto, no necesita ir a ningún lado hoy
	                            </h3>		
								<!--
								<div class="">
									<a class="animated4 slider btn btn-primary btn-min-block white" href="#">Get Now</a>
									<a class="animated4 slider btn btn-primary btn-min-block solid" href="#">Live Demo</a>
								</div>     
								-->
	                        </div>
	                    </div>
					</li>
				</ul>
			</div>
		</div><!--/ Main slider end -->    	
    </section> <!--/ Slider end -->

    <!-- About tab start -->
	<section id="servicios" class="about angle capa_a_ocultar">
		<div class="container ">
			<div class="row">
				<div class="landing-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
					  	<li class="active">
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<!-- <span class="tab-icon"><i class="fa fa-info"></i></span> -->
					  			<div class="tab-info">
						  			<h3>SERVICIOS</h3>
					  			</div>
					  		</a>
					  	</li><br>
					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<!--<span class="tab-icon">
									  <i class="fa fa-briefcase"></i>
									</span>
								-->
					  			<div class="tab-info">
						  			<h3>DISEÑO WEB</h3>
					  			</div>
						  	</a>
						</li>
						<br>
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
						  		<!--<span class="tab-icon"><i class="fa fa-android"></i></span>-->
					  			<div class="tab-info">
						  			<h3>DISEÑOS RESPONSIVOS</h3>
					  			</div>
						  	</a>
						</li>
						<br>
						<li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab">
						  		<!--<span class="tab-icon"><i class="fa fa-pagelines"></i></span>-->
					  			<div class="tab-info">
						  			<h3>SITIOS AUTOADMINISTRABLES</h3>
					  			</div>
						  	</a>
						</li>
						<br><br>
						<li>
								<a class="animated fadeIn" href="#tab_e" data-toggle="tab">
									<!--<span class="tab-icon"><i class="fa fa-briefcase"></i></span>-->
									<div class="tab-info">
										<h3>Marketing Digital</h3>
									</div>
								</a>
						  </li>
						  <br>
						<li>
						  	<a class="animated fadeIn" href="#tab_f" data-toggle="tab">
						  		<!--<span class="tab-icon"><i class="fa fa-support"></i></span>-->
					  			<div class="tab-info">
						  			<h3>Preguntas Frecuentes</h3>
					  			</div>
						  	</a>
						</li>
					</ul>
					<div class="tab-content col-md-9 col-sm-7">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<div class="img-hexagon">
								<img src="img/servicios/servicio.png" alt="">								
								<span class="img-bottom"></span>
							</div>
				            <p>Ofrecemos servicio de alta calidad, para todo tipo de clientes y necesidades. Ajustandose siempre a tu presupuesto, para que puedas obtener lo mejor.</p>
				        </div>
				        <div class="tab-pane animated fadeInLeft" id="tab_b">
							<div class="img-hexagon">
								<img src="img/servicios/diseñoweb.jpg" alt="">								
								<span class="img-bottom"></span>
							</div>
							<p>Diseño y desarrollo utilizando lo último en tecnologías Web: LARAVEL, REACT, WORDPRESS, PHP, JAVA, JAVA SCRIPT, HTML5, CSS3 Y MYSQL.</p>							 
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_c">
							<div class="img-hexagon">
								<img src="img/servicios/responsive1.png" alt="">								
								<span class="img-bottom"></span>
							</div>
							<h3>Diseños adaptables a dispositivos: pc, notebooks, tablets, celulares.</h3>
							<p></p>
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_d">
							<div class="img-hexagon">
								<img src="img/servicios/admin1.jpg" alt="">								
								<span class="img-bottom"></span>
							</div>
				            <p>Se puede modificar su contenido de manera sencilla sin necesidad de pagar mantenimiento.</p>
						</div>
						<div class="tab-pane animated fadeIn" id="tab_e">								
								<div class="img-hexagon">
										<img src="img/servicios/marketing.png" alt="">								
										<span class="img-bottom"></span>
								</div>
								<h3>Marketing Digital</h3> 
								<p>El Marketing Online o Marketing Digital permite aprovechar las ventajas y las oportunidades que ofrece Internet para promocionar y posicionar su marca y potenciar el desarrollo de su negocio de una manera eficiente.</p>
						</div>
				        <div class="tab-pane animated fadeIn" id="tab_f">
								<div class="timeline-image">
										<div class="img-hexagon">
												<img src="img/servicios/ayuda.png" alt="">								
												<span class="img-bottom"></span>
											</div>
								  </div>
				            <ul>
								<li>
									<a href="">¿Que es un dominio?</a>
								</li>
								<li>
									<a href="">¿Que es un Hosting?</a>
								</li>								
								<li>
									<a href="">¿Que es un Template?</a>
								</li>								
							</ul> 
				        </div>
					</div><!-- tab content -->
	    		</div><!-- Overview tab end -->
			</div><!--/ Content row end -->
		</div><!-- Container end -->
	</section>
	<!-- About end -->

	<!-- About tab strat movil -->
	<section id="servicios2" class="about angle capa_a_mostrar">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">SERVICIOS</h2>
				<h3 class="section-subheading text-muted">Conoce lo que ofrecemos.</h3>
			  </div>
			</div>
			<div class="row text-center">
			  <div class="col-md-3 ">
				  <div class="timeline-image">
						<div class="img-hexagon">
								<img src="img/servicios/servicio.png" alt="">								
								<span class="img-bottom"></span>
							</div>
				  </div>
				<h4 class="service-heading">SERVICIOS</h4>
				<p class="text-muted ">Ofrecemos servicio de más alta calidad, para todo tipo de clientes y necesidades. Ajustandose siempre a tu presupuesto, para que puedas obtener lo mejor.</p>
			  </div>
			  <div class="col-md-3">
				  <div class="timeline-image">
						<div class="img-hexagon">
								<img src="img/servicios/diseñoweb.jpg" alt="">								
								<span class="img-bottom"></span>
							</div>
				  </div>
				<h4 class="service-heading">DISEÑO WEB</h4>
				<p class="text-muted">Diseño y desarrollo utilizando lo último en tecnologías Web: LARAVEL, REACT, WORDPRESS, PHP, JAVA, JAVA SCRIPT, HTML5, CSS3 Y MYSQL.</p>
			  </div>
			  <div class="col-md-3">
				  <div class="timeline-image">
						<div class="img-hexagon">
								<img src="img/servicios/responsive1.png" alt="">								
								<span class="img-bottom"></span>
							</div>
				  </div>
				<h5 class="service-heading">DISEÑOS <br> RESPONSIVOS</h5>
				<p class="text-muted">Diseños adaptados a los dispoitivos moviles: notebooks, tablets, celulares, etc.</p>
			  </div>
			  <div class="col-md-3">
				  <div class="timeline-image">
						<div class="img-hexagon">
								<img src="img/servicios/admin1.jpg" alt="">								
								<span class="img-bottom"></span>
							</div>
				  </div>
				  <h5 class="service-heading">SITIOS <br> AUTOADMINISTRABLES</h5>
				  <p class="text-muted">Se puede modificar su contenido de manera sencilla sin necesidad de pagar mantenimiento.</p>
				</div>

				<div class="col-md-3">
					<div class="timeline-image">
							<div class="timeline-image">
									<div class="img-hexagon">
											<img src="img/servicios/ayuda.png" alt="">								
											<span class="img-bottom"></span>
										</div>
							  </div>
					</div>
					<h5 class="service-heading">Preguntas Frecuentes</h5>
					<p class="text-muted">
						
							<a href="">¿Que es un dominio?</a><br>
							<a href="">¿Que es un Hosting?</a><br>
							<a href="">¿Que es un Template?</a>
						
					</p>
				</div>

			</div>
		  </div>
    </section>
	<!-- About end -->

    <section id="nosotros" class="image-block no-padding ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding" style="height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
				</div>
				<div class="col-md-6 ts-padding img-block-right">
					<div class="img-block-head text-center">
						<h2>Conoce más sobre nuestra empresa.</h2>
						<h3>SOBRE NOSOTROS</h3>
						<p>
						TRABAJO DE CALIDAD. <br>
						Te entregamos un documento que detalla el presupuesto con modelos de diseños de sitios según cada plan, servicios incluidos y metodología de trabajo. Contamos además con planes para sitios inmobiliarios, portales de noticias, hotelería, gastronómicos, y mucho más.
						</p>
					</div>

					<div class="gap-30"></div>

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-bicycle"></i></span>
						<div class="feature-content">
							<h3>Tons of Features</h3>
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
						<div class="feature-content">
							<h3>PowerPack Theme</h3>
							<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-street-view"></i></span>
						<div class="feature-content">
							<h3>Day Night Support</h3>
							<p>Simply dummy text and typesettings industry has been the industry</p>
						</div>
					</div><!--/ End 1st block -->


				</div>
			</div>
		</div>
	</section>

	<!-- Counter Strat -->
	<!--
	<section class="ts_counter no-padding">
		<div class="container-fluid">
			<div class="row facts-wrapper wow fadeInLeft text-center">
				<div class="facts one col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-user"></i></span>
					<div class="facts-num">
						<span class="counter">1200</span>
					</div>
					<h3>Clients</h3> 
				</div>

				<div class="facts two col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-institution"></i></span>
					<div class="facts-num">
						<span class="counter">1277</span>
					</div>
					<h3>Item Sold</h3> 
				</div>

				<div class="facts three col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
					<div class="facts-num">
						<span class="counter">869</span>
					</div>
					<h3>Projects</h3> 
				</div>

				<div class="facts four col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-trophy"></i></span>
					<div class="facts-num">
						<span class="counter">76</span>
					</div>
					<h3>Awwards</h3> 
				</div>

			</div>
		</div>
		
	</section>-->
	<!--/ Counter end -->


    <!-- Portfolio start -->
	<section id="portafolio" class="portfolio portfolio-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading text-center">
					<span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
					<h2 class="title2">Proyectos Completados
						<span class="title-desc">Proyectos realizados con diferentes tecnologias </span>
					</h2>
				</div>
			</div> <!-- Title row end -->

			<!--Isotope filter start -->
			<div class="row text-center">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">Todos</a></li>
						<li><a href="#" data-filter=".web-design">Doiseño Web</a></li>
						<li><a href="#" data-filter=".genexus">Genexus</a></li>
						<li><a href="#" data-filter=".laravel">Laravel</a></li>
						<li><a href="#" data-filter=".wordpress">Wordpress</a></li>
					</ul>
				</div>
			</div><!-- Isotope filter end -->
			
			<div class="row">
				<div id="isotope" class="isotope">

					<div class="col-sm-3 laravel web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/alquilersalta.png" alt="">
									<figcaption>
										<h3>Alquiler Salta</h3>
										<a class="link icon-pentagon" href="https://alquilersalta.com/" target="_blank"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/alquilersalta.png"><i class="fa fa-search"></i></a>            
									</figcaption>				
								</figure>
							</div>
					</div><!-- Isotope item end -->
		
					<div class="col-sm-3 wordpress isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/wordpress.png" alt="">
									<figcaption>
										<h3>Sitio de Wordpress</h3>
										<a class="link icon-pentagon" href="https://sfiweblq.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/wordpress.png"><i class="fa fa-search"></i></a>            
									</figcaption>					
								</figure>
							</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio1.jpg" alt="">
								<figcaption>
									<h3>Startup Business</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>			
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 genexus isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio2.jpg" alt="">
								<figcaption>
									<h3>Easy to Lanunch</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio5.jpg" alt="">
								<figcaption>
									<h3>Fashion Brand</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg5.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio6.jpg" alt="">
								<figcaption>
									<h3>The Insidage</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio7.jpg" alt="">
								<figcaption>
									<h3>Light Carpet</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio8.jpg" alt="">
								<figcaption>
									<h3>Amazing Keyboard</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->
				</div><!-- Isotope content end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio end -->

	<!-- Service box start -->
	<!-- 
		<section id="" class="feature">
		<div class="container">

			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-heart-o"></i></span>
					<div class="feature-content">
						<h3>Clean &amp; Modern Design</h3>
						<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
					</div>
				</div>

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-codepen"></i></span>
					<div class="feature-content">
						<h3>Useful Shortcodes</h3>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
					</div>
				</div>

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-film"></i></span>
					<div class="feature-content">
						<h3>Parallax Section</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
			</div>

			<div class="gap-40"></div>

			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-newspaper-o"></i></span>
					<div class="feature-content">
						<h3>Multipurpose Concept</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-desktop"></i></span>
					<div class="feature-content">
						<h3>Responsive Layout</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-pagelines"></i></span>
					<div class="feature-content">
						<h3>Light wight Performance</h3>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
					</div>
				</div>

			</div>
		 

			<div class="gap-40"></div>

			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-recycle"></i></span>
					<div class="feature-content">
						<h3>Free Lifetime Updates</h3>
						<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
					</div>
				</div>

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>Endless Possibilites</h3>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
					</div>
				</div>

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-whatsapp"></i></span>
					<div class="feature-content">
						<h3>24/7 Live Support</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
			</div>

		</div>
	</section>
 -->


	 <!-- Parallax 2 start -->
	<section class="parallax parallax2">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>" Dime el problema, no la solucion "</h2>
					<h3> </h3>
				</div>
			</div>
		</div><!-- Container end -->
    </section><!-- Parallax 2 end -->



	<!-- Team start -->
	<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">NUESTRO EQUIPO<span class="title-desc">Un equipo con experiencia</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-4 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="img/team/miguel.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Miguel Villatarco</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>	
				</div><!--/ Team 1 end -->
				<div class="col-md-4 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="img/team/nahuel.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Nahuel Benicio</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 2 end -->
				<!--/ Team 3 end -->
				<div class="col-md-4 col-sm-6">
					<div class="team animate wow slideInRight">
						<div class="img-hexagon">
							<img src="img/team/fabri.png" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Julio Fabri</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 4 end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section><!--/ Team end -->


	<!-- Testimonial start-->
	<section class="testimonial parallax parallax3">
		<div class="parallax-overlay"></div>
	  	<div class="container">
		    <div class="row">
			    <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
			        <div class="item">
			          	<div class="testimonial-thumb">
			            	<img src="images/team/testimonial1.jpg" alt="testimonial">
			          	</div>
			          	<div class="testimonial-content">
				            <p class="testimonial-text">
				              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
				            </p>
			            	<h3 class="name">Sarah Arevik<span>Chief Executive</span></h3>
			          	</div>
			        </div>
			        <div class="item">
			          	<div class="testimonial-thumb">
			            	<img src="images/team/testimonial2.jpg" alt="testimonial">
			          	</div>
				        <div class="testimonial-content">
				            <p class="testimonial-text">
				              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
				            </p>
				            <h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
				        </div>
			        </div>
			        <div class="item">
				        <div class="testimonial-thumb">
				            <img src="images/team/testimonial3.jpg" alt="testimonial">
				        </div>
			          	<div class="testimonial-content">
				            <p class="testimonial-text">
				              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
				            </p>
			            	<h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
			          	</div>
			        </div>
			    </div><!--/ Testimonial carousel end-->
		    </div><!--/ Row end-->
	  	</div><!--/  Container end-->
	</section><!--/ Testimonial end-->


	<!-- Newsletter start -->
	<section id="contacto" class="newsletter">
		<div class="container">
		  	<div class="row">
				<div class="col-md-12 heading text-center">
					<span class="icon-pentagon wow bounceIn animated"><i class="fa fa-envelope"></i></span>
					<h2 class="title2">Conatctenos
						<span class="title-desc">Si tiene alguna duda o sugerencia contactenos</span>
					</h2>
				</div>
			</div>
			<div class="row">
					<div class="col-md-7">
						<form id="contact-form" action="{{ url('contacto') }}" method="post" role="form">
								{{ csrf_field() }}
								@foreach ($errors->all() as $error)
									<p class="alert alert-danger">{{ $error }}</p>
								@endforeach
								@if (session('estado'))
									<div class="alert alert-success">
										{{ session('estado') }}
									</div>
								@endif
							<div class="row">
								@if(session()->has('flash'))
									<div class="alert alert-success">
										<strong>Exito!</strong> {{ session('flash') }}
									</div>                          
								@endif
								<div class="col-md-6">
									<div class="form-group">
										<label>Nombre</label>
									<input class="form-control" name="name" id="name" placeholder="" type="text" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" name="email" id="email" 
										placeholder="" type="email" required>
									</div>
								</div>								
							</div>
							<div class="form-group">
								<label>Mensaje</label>
								<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
							</div>
							<div class="text-right"><br>
								<button class="btn btn-primary solid blank" type="submit">Enviar Mensaje</button> 
							</div>
						</form>
					</div>
					<div class="col-md-5">
						<div class="contact-info">
							<h3>Detalles de Contacto</h3>
							
							<p><i class="fa fa-home info"></i>  1102 Saint Marys, Junction City, KS </p>
							<p><i class="fa fa-phone info"></i>  +(785) 238-4131 </p>
							<p><i class="fa fa-envelope-o info"></i>  info@bizcraft.com</p>
							<p><i class="fa fa-globe info"></i>  www.bizcraft.com</p>
						</div>
					</div>
				</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Newsletter end -->
	


	<!-- Footer start -->
	<section id="copyright" class="copyright ">
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

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/agency.min.js') }}"></script>

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