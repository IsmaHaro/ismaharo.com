<!doctype html>
<html lang="es">
<head>

	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="@yield('meta_description')" />
	<meta name="author" content="Isma Haro" />

	<!-- Title -->
	<title>
        @yield('title')
    </title>

    <!--METAS OG (OPEN GRAPH)-->
    <meta property="og:locale" content="es_MX" />
	<meta property="og:type" content="@yield('og_type')" />
	<meta property="og:title" content="@yield('og_title')" />
	<meta property="og:description" content="@yield('og_description')" />
	<meta property="og:url" content="@yield('og_url')" />
	<meta property="og:site_name" content="ismaharo.com" />
	<meta property="article:publisher" content="https://www.facebook.com/isma.haro.seo" />
	<meta property="article:published_time" content="@yield('og_published_time')" />
	<meta property="article:modified_time" content="@yield('og_modified_time')" />
	<meta property="article:author" content="@yield('og_author')" />
	<meta property="og:image" content="@yield('og_image')" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="600" />

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="/css/basic.css" />
	<link rel="stylesheet" href="/css/layout.css" />
	<link rel="stylesheet" href="/css/magnific-popup.css" />
	<link rel="stylesheet" href="/css/animate.css" />
	<link rel="stylesheet" href="/css/jarallax.css" />
	<link rel="stylesheet" href="/css/swiper.css" />
	<link rel="stylesheet" href="/css/fontawesome.css" />
	<link rel="stylesheet" href="/css/brands.css" />
	<link rel="stylesheet" href="/css/solid.css" />


	<!-- Theme Colors
	<link rel="stylesheet" href="css/theme-colors/blue.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	<link rel="stylesheet" href="css/theme-colors/orange.css" />
	<link rel="stylesheet" href="css/theme-colors/brown.css" />
	<link rel="stylesheet" href="css/theme-colors/purple.css" />
	<link rel="stylesheet" href="css/theme-colors/red.css" />
	<link rel="stylesheet" href="css/theme-colors/beige.css" />
	<link rel="stylesheet" href="css/theme-colors/green_light.css" />

	<link rel="stylesheet" href="css/theme-colors/yellow_light.css" />
	-->

    <link rel="stylesheet" href="/css/theme-colors/yellow.css" />
    <link rel="stylesheet" href="/css/custom.css" />

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="/images/favicons/favicon.ico">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NLMFPMD');</script>
<!-- End Google Tag Manager -->
</head>

<body class="home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLMFPMD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<!-- Preloader -->
	<div class="preloader">
		<div class="centrize full-width">
			<div class="vertical-center">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Container -->
	<div class="container">

		<!-- Cursor -->
		<div class="cursor-follower"></div>

		<!-- Header -->
		<header class="header">
			<div class="head-top">

				<!-- menu button -->
				<a href="#" class="menu-btn"><span></span></a>

				<!-- logo -->
				<div class="logo hover-masks-logo">
					<a href="/">
						<span class="">Isma <strong>Haro</strong></span>
					</a>
				</div>

				<!-- top menu -->
				<div class="top-menu hover-masks">
					<div class="top-menu-nav">
						<div class="menu-topmenu-container">
							<ul class="menu">
                                <li class="menu-item {{ Request::is('/') ? 'current-menu-item' : '' }}">
									<a href="/">Inicio</a>
								</li>
                                <li class="menu-item {{ Request::is('servicio-de-seo') ? 'current-menu-item' : '' }}">
									<a href="/servicio-de-seo">Servicio De SEO</a>
								</li>
                                <li class="menu-item {{ Request::is('servicio-de-google-ads') ? 'current-menu-item' : '' }}">
									<a href="/servicio-de-google-ads">Servicio De Google Ads</a>
								</li>
                                <li class="menu-item menu-item-has-children {{ Request::is('posicionamiento-seo') ? 'current-menu-item' : '' }}">
									<a>Blog</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="/posicionamiento-seo">Posicionamiento SEO</a></li>
										<li class="menu-item"><a href="/google-ads">Todo Sobre Google Ads</a></li>
									</ul>
								</li>
								<li class="menu-item {{ Request::is('contacto') ? 'current-menu-item' : '' }}">
									<a href="/contacto">Contacto</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</header>

		<!-- Wrapper -->
		<div class="wrapper">
            @yield('main_content')
		</div>

		<!-- Footer -->
		<footer class="footer">
			<div class="copy">
				<p>
                    <a href="mailto:isma@capmega.com">isma@capmega.com</a>
                    <br>
                    <a href="/mapa-del-sitio">Mapa del Sitio</a>
                </p>
			</div>
			<div class="soc-box">
				<div class="follow-label">Sígueme</div>
				<div class="soc">
					<a target="_blank" href="https://www.instagram.com/isma.haro/">
						<span class="icon fab fa-instagram"></span>
					</a>
					<a target="_blank" href="https://www.facebook.com/isma.haro.seo">
						<span class="icon fab fa-facebook"></span>
					</a>
				</div>
			</div>
			<div class="clear"></div>
		</footer>

		<!-- Lines -->
		<div class="lines">
			<div class="content">
				<div class="line-col"></div>
				<div class="line-col"></div>
				<div class="line-col"></div>
				<div class="line-col"></div>
				<div class="line-col"></div>
			</div>
		</div>

	</div>

	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery.validate.js"></script>
	<script src="/js/magnific-popup.js"></script>
	<script src="/js/simpleParallax.js"></script>
	<script src="/js/typed.js"></script>
	<script src="/js/jarallax.js"></script>
	<script src="/js/jarallax-video.js"></script>
	<script src="/js/jarallax-element.js"></script>
	<script src="/js/imagesloaded.pkgd.js"></script>
	<script src="/js/isotope.pkgd.js"></script>
	<script src="/js/swiper.js"></script>
	<script src="/js/grained.js"></script>
	<script src="/js/scripts.js"></script>

</body>
</html>