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
		
		
		.side-menu{
			text-align:left;
		}

		#content1{
			width:100%;
			height:auto;
			float:left;
		}

		#sidebar{
			width:10%;
			height:63rem;
			float:left;
			background-color:#c0c0c0;
		}

		#thead-button{
			margin-left:2%
		}	
		
	</style>

	<!-- Document Title
	============================================= -->
	<title>商品列表</title>
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
						<a href="int" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="https://i.imgur.com/snRYYWd.png" alt="Canvas Logo"></a>
						<a href="int" class="retina-logo" data-dark-logo="https://i.imgur.com/bkZewqn.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
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
		
		<section id="content1">

			<table id="table_cgy">
			    <thead>
			    	<a href="{{url('products/create')}}"><button id="thead-button">新增</button></a>
			        <tr>
			        	<th>數字次序</th>
			        	<th>名稱</th>
			        	<th>類別</th>
			            <th>圖片</th>
			            <th>價格</th>
			            <th>庫存</th>
			            <th>編輯</th>
			        </tr>
			    </thead>
			    <tbody>
				
			        @foreach ($products as $element)
			        	<tr>
						<td>{{$element->sort}}</td>
			        	<td>{{$element->title}}</td>
			        	<td>{{$element->cgy_id}}</td>
			            <td><img id="commodity" src="{{$element->pic}}"></td>
			            <td>{{$element->price}}</td>
			            <td>{{$element->stock}}</td>
			            <td>
			        		<a href="{{url('products/'. $element->id .'/edit')}}"><img id="editclose" src="{{asset('images\icons\features\edit.png')}}"></a>
			        		<a href="{{url('products/del/'.$element->id)}}"><img id="editclose" src="{{asset('images\icons\features\close3.png')}}"></a>
			        	</td>
			        </tr>
			        @endforeach

			    </tbody>
			</table>
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