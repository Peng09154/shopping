<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    @include('includes._head',['author'=>'Peng'])
	<!-- Document Title
	============================================= -->
	<title>@yield('title')</title>
</head>
<body class="stretched">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">
			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/auction2/public/int" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="https://i.imgur.com/snRYYWd.png" alt="Canvas Logo"></a>
						<a href="/auction2/public/int" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="https://i.imgur.com/bkZewqn.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">
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

	                        <li class="current"><a href="#"><div><font color="blue">後台管理</font></div></a>
								<ul>

									<li><a href="carousels"><div>輪播管理</div></a></li>
									<li><a href="cgys"><div>分類管理</div></a></li>
									<li><a href="products"><div>產品管理</div></a></li>

								</ul>
							</li>

						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="commodity">
			@yield('content')
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