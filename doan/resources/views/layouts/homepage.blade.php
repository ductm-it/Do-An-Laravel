<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home ::
		w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- //for-mobile-apps -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- pignose css -->
	<link href="{{asset('css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />


	<!-- //pignose css -->
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Sweet Alert css -->
	<link href="{{asset('assets/plugins/sweet-alert/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- js -->
	<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->
	<!-- cart -->
	<script src="{{asset('js/simpleCart.min.js')}}"></script>
	<!-- cart -->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
	<!-- //for bootstrap working -->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link
		href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
		rel='stylesheet' type='text/css'>
	<script src="{{asset('js/jquery.easing.min.js')}}"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">


	{{-- css cua modal login success --}}
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style type="text/css">
		body {
			font-family: 'Varela Round', sans-serif;
		}
		.modal-confirm {		
			color: #434e65;
			width: 525px;
		}
		.modal-confirm .modal-content {
			padding: 20px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
		}
		.modal-confirm .modal-header {
			background: #47c9a2;
			border-bottom: none;   
			position: relative;
			text-align: center;
			margin: -20px -20px 0;
			border-radius: 5px 5px 0 0;
			padding: 35px;
		}
		.modal-confirm h4 {
			text-align: center;
			font-size: 36px;
			margin: 10px 0;
		}
		.modal-confirm .form-control, .modal-confirm .btn {
			min-height: 40px;
			border-radius: 3px; 
		}
		.modal-confirm .close {
			position: absolute;
			top: 15px;
			right: 15px;
			color: #fff;
			text-shadow: none;
			opacity: 0.5;
		}
		.modal-confirm .close:hover {
			opacity: 0.8;
		}
		.modal-confirm .icon-box {
			color: #fff;		
			width: 95px;
			height: 95px;
			display: inline-block;
			border-radius: 50%;
			z-index: 9;
			border: 5px solid #fff;
			padding: 15px;
			text-align: center;
		}
		.modal-confirm .icon-box i {
			font-size: 64px;
			margin: -4px 0 0 -4px;
		}
		.modal-confirm.modal-dialog {
			margin-top: 80px;
		}
		.modal-confirm .btn {
			color: #fff;
			border-radius: 4px;
			background: #eeb711;
			text-decoration: none;
			transition: all 0.4s;
			line-height: normal;
			border-radius: 30px;
			margin-top: 10px;
			padding: 6px 20px;
			border: none;
		}
		.modal-confirm .btn:hover, .modal-confirm .btn:focus {
			background: #eda645;
			outline: none;
		}
		.modal-confirm .btn span {
			margin: 1px 3px 0;
			float: left;
		}
		.modal-confirm .btn i {
			margin-left: 1px;
			font-size: 20px;
			float: right;
		}
		.trigger-btn {
			display: inline-block;
			margin: 100px auto;
		}
	</style>
</head>

<body>

	<!-- header -->
	@include('partials.header', [])
	<!-- //header-bot -->
	<!-- banner -->
	@include('partials.banner', [])

	<!-- //banner -->
	<!-- content -->

	@yield('content')

	<div class="row" >
		<div class="col-sm-4"> </div>
		<div class="col-sm-4"> </div>
		<div class="col-sm-4"> <button class="btn btn-primary" style=' z-index:1000;position:fixed; width:300px;bottom:0; left:1% ' id="lienhe">Liên hệ với chúng tôi</button></div>
		<div class="col-sm-4" id="chatbot" >
			<div style=' z-index:999;position:fixed; width:300px;bottom:40px; left:1% '	class="fb-page" data-href="https://www.facebook.com/Sample-chat-bot-111148513559842/"
				data-tabs="timeline" data-width="" data-height="" data-small-header="false"
				data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<blockquote cite="https://www.facebook.com/Sample-chat-bot-111148513559842/"
					class="fb-xfbml-parse-ignore"><a
						href="https://www.facebook.com/Sample-chat-bot-111148513559842/">Sample chat bot</a>
				</blockquote>
			</div>
		</div>

	</div>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous"
		src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=588809281565439&autoLogAppEvents=1">
	</script>

	<!-- footer -->
	@include('partials.footer', [])
	@include('partials.login', [])
	@include('partials.forgot', [])
	<!-- footer -->
	<!-- login -->
	@include('partials.login', [])
	
	<!-- //login -->
	<!-- load all category to sub menu -->
	<script>
		$.get("/api/category", function(data, status){
			data.map((item,index)=>{
				$('#listCategory').append(`<li><a href="/category/${item.id}">${item.categoryName}</a></li>`)
			})
		});
	</script>
	<!-- Sweet Alert Js  -->
	<script src="{{asset('assets/plugins/sweet-alert/sweetalert2.min.js')}}"></script>
	<script src="{{asset('assets/pages/jquery.sweet-alert.init.js')}}"></script>

	<script src="{{asset('/assets/pages/homepage.js')}}"></script>
	
	<script src="{{asset('assets/pages/register.js')}}"></script>
	<script src="{{asset('assets/pages/loginHomepage.js')}}"></script>
	<script src="{{asset('assets/pages/checkout.js')}}"></script>
	
	<script src="{{asset('js/imagezoom.js')}}"></script>
	<script src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script>
		$(document).ready(function(){
			$("#chatbot").hide();
		  $("#lienhe").click(function(){
			$("#chatbot").toggle();
		  });
		});
	</script>


</body>

</html>