<!DOCTYPE html>
<html>
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
	<title>購買成功</title>

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
						<a href="int" class="standard-logo"><img src="images/logo-dark.png" alt="Canvas Logo"></a>
						<a href="int" class="retina-logo"><img src="images/logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">
					<ul>
                        {{-- <li><a href="#"><div><font color="blue">我的拍賣</font></div></a>
							<ul>
								<li><a href="#"><div><i class="icon-stack"></i>買家</div></a></li>
								<li><a href="#"><div>待結帳</div></a></li>
								<li><a href="#"><div>已購買</div></a></li>
								<li><a href="#"><div>已追蹤</div></a></li>
							</ul>
						</li> --}}
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}"><font color="blue">{{ __('登入') }}</font></a></li>
                            <li><a class="nav-link" href="{{ route('register') }}"><font color="blue">{{ __('註冊') }}</font></a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><font color="blue">
                                    {{ Auth::user()->name }}</font><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
									<a class="dropdown-item" href="orders">
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
                    </ul>
						{{-- <ul>
							
							<li><a href="#"><div>我的拍賣</div></a>
								<ul>
									<li><a href="#"><div><i class="icon-stack"></i>買家</div></a></li>
									<li><a href="#"><div>待結帳</div></a></li>
									<li><a href="#"><div>已購買</div></a></li>
									<li><a href="#"><div>已追蹤</div></a></li>
									<li><a href="backstage1"><div>後台管理</div></a></li>
								</ul>
							</li>

							
						</ul> --}}
							




						<!-- Top Cart
						============================================= -->
						{{-- <div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>2</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>購物車</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">百搭純色落肩寬鬆連帽短袖棉T_7色</a>
											<span class="top-cart-item-price">NT$290</span>
											<span class="top-cart-item-quantity">x 1</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">純棉 M-5L高品質舒適透氣圓領T恤短袖上衣</a>
											<span class="top-cart-item-price">NT$199</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">NT$489</span>
									<a href="car"><button class="button button-3d button-small nomargin fright">查看購物車</button></a>
								</div>
							</div>
						</div> --}}<!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						{{-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div> --}}<!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->


		<div style="width:100%;height:100%;text-align:center;line-height:150px;">
		　<h1>購買成功，感謝您的訂購</h1>
		</div>	

	</div><!-- #wrapper end


	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

</body>
</html>