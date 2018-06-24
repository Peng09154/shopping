<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<!-- Stylesheets
	============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css')}}">
	<link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />

	<style type="text/css">
		th{
			text-align:center;
		}
		td{
			text-align: center;
			width: 15%;
			height:10px;
			padding: 8px 10px;
		}

		tr,td{
			border-bottom:1px solid #c0c0c0;
		}

		#commodity{
			width:auto;
			height:70px;
		}
		#editclose{
			width:auto;
			height:25px;
		}
		
	</style>

	<!-- Document Title
	============================================= -->
	<title>{{$cgy->title}}</title>
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
						<a href="/auction2/public/int" class="standard-logo"><img src="https://i.imgur.com/snRYYWd.png" alt="Canvas Logo"></a>
						<a href="/auction2/public/int" class="retina-logo"><img src="https://i.imgur.com/bkZewqn.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">
						<ul>
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
                                    
									<a class="dropdown-item" href="/auction2/public/orders">
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
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header>
		<!-- #header end -->

		<section id="content">

				<div class="section topmargin nobottommargin nobottomborder">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3>{{$cgy->title}}</h3>
						</div>
					</div>
				</div>

				<div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">
				
					@foreach ($products as $product)
						
					<article class="portfolio-item pf-media pf-icons">
						
						<div class="portfolio-image">
							<a href="{{url('backend/products/'.$product->id)}}">
								<img src="{{asset($product->pic)}}" alt="Open Imagination">
							</a>
						</div>

						<div class="portfolio-desc">
							<span><a href="{{url('backend/products/'.$product->id)}}">{{$product->title}}</a></span>
						</div>

					</article>
					@endforeach
					
				</div>


				<div class="clear"></div>

				<a href="#" class="button button-full button-dark center tright bottommargin-lg">
					<div class="container clearfix">
						
					</div>
				</a>
				

		</section>
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
	<!-- import script files -->
	<script type="text/javascript" src="{{asset('http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready( function () {
	    $('#table_cgy').DataTable();
	} );
	</script>
</body>
</html>

