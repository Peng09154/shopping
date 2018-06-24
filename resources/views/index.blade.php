<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	
	<!-- Stylesheets
	============================================= -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>專題購物網</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

			<div id="header-wrap">
	
				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="int" class="standard-logo"><img src="https://i.imgur.com/snRYYWd.png" alt="Canvas Logo"></a>
						<a href="int" class="retina-logo"><img src="https://i.imgur.com/bkZewqn.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">
					<ul>
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}"><font color="blue">{{ __('登入') }}</font></a></li>
                            <li><a class="nav-link" href="{{ route('register') }}"><font color="blue">{{ __('註冊') }}</font></a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><font color="blue">
                                    {{ Auth::user()->name }}</font><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
									<a class="dropdown-item" href="{{url('backend/orders')}}">
                                        訂單查詢
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('登出') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li><a href="{{url('backend/products')}}"><div><font color="blue">後台管理</font></div></a></li>
                    </ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('https://i.imgur.com/DHbm3W4.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp" style="color:black">鯊魚 65cm 抱枕 鯊魚抱枕</h2>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('https://i.imgur.com/Anm6mX3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">寶可夢怪獸球模型</h2>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('https://i.imgur.com/T4JVg1r.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">無線電競滑鼠</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

				<div class="section topmargin nobottommargin nobottomborder">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3>分類</h3>
						</div>
					</div>
				</div>

				<div id="index.html" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">

					@foreach ($cgys as $cgy)

					<article class="portfolio-item pf-media pf-icons">
						<div class="portfolio-image">
							<a href="{{url('cgys/showProducts/'.$cgy->id)}}">
								<img src="{{$cgy->pic}}" alt="Open Imagination">
							</a>
							
						</div>
						<div class="portfolio-desc">
							<h3><a href="{{url('cgys/showProducts/'.$cgy->id)}}">{{$cgy->title}}</a></h3>
						</div>
					</article>
					
					@endforeach

				</div>

				<div class="clear"></div>

		</section><!-- #content end -->

	</div><!-- #wrapper end

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

</body>
</html>