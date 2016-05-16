<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@section('title') Manga Titan @show</title>
		<link rel="stylesheet" href="{{ asset('css/semantic.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/app.css')}}">
		<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,300italic' rel='stylesheet' type='text/css'> -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" type="text/css">
		<script src="{{ asset('js/jquery-2.2.2.min.js')}}"></script>
		<script src="{{ asset('js/semantic.min.js')}}"></script>
		<script src="{{ asset('js/vue.js')}}"></script>
		<!--============================ Page Style Here    ===========================-->
		@yield('pageStyle')
		<!--============================ Page Script Here   ===========================-->
		@yield('pageScript')
	</head>
	<body>
		@yield('sidebar')

		<div class="pusher">
			@section('pageMenu')
			<div class="ui inverted borderless manga fixed menu">
				<div class="ui container fluid">
					<div class="header item">
						<img class="logo" src="{{ asset('logo.png') }}">
					</div>
					@yield('pageMenubar')
				</div>
			</div>
			@show
			<div class="ui grid page-body">
				<div class="page-menu column">
					<div class="ui vertical icon menu">
						@yield('pageSideMenu')
					</div>
				</div>
				<div class="page-content light column">
					<div class="page-bar">
						<div class="ui breadcrumb">
						  <a class="section">Home</a>
						  <i class="circle icon divider"></i>
						  <a class="section">Registration</a>
						</div>
					</div>
					<h3 class="page-title">
						Home Page | Page
						<small>Test page gor hie</small>
					</h3>
					@yield('pageContent')
				</div>
			</div>
		</div>

		<style>
			.page-bar {
			    background-color: #fff;
			    position: relative;
			    padding: 0 20px;
			    margin: -25px -20px 0;
			    border-bottom: 1px solid #e7ecf1;
			}
			.page-bar .ui.breadcrumb {
				padding: 11px 0;
			}
			.page-bar .ui.breadcrumb .icon.divider {
				font-size: 5px;
				margin: 0 5px;
				position: relative;
				top: -3px;
				opacity: .4;
			}
			.page-bar .ui.breadcrumb .section {
				color: #888;
				font-family: "Open Sans",sans-serif;
				font-size: 14px;
				line-height: 20px;
			}
			h3.page-title {
				font-size: 24px;
				font-family: "Open Sans",sans-serif;
				font-weight: 300;
				margin:25px 0;
				padding: 0;
				letter-spacing: -1px;
				line-height: 1.1;
				color: #666;
			}
			h3.page-title small {
			    font-size: 14px;
			    letter-spacing: 0;
			    font-weight: 300;
			    color: #888;
			}
			.portlet.light {
				padding: 12px 20px 15px;
				background-color: #fff;
			}
			.portlet.light.bordered {
				border:1px solid #e7ecf1 !important;
			}
			.page-menu .ui.menu {
				box-shadow: none;
				background: transparent;
				border-radius: 0;
				border: none medium;
				padding-top:20px;
				width: 45px;
			}
			.page-menu .ui.menu .item:first-child {
				border-top:none medium;
			}
			.page-menu .ui.menu .item {
				color: #b4bcc8;
				padding:13px;
				border-top: 1px solid rgb(61, 73, 87);
				font-size: 17px;
				text-align: left;
				border-radius: 0 !important;
			}
			.page-menu .ui.menu .item.active {
				background-color: #36c6d3;
				border-top:none medium;
				margin-top:1px;
				color:#FFF;
			}
			.page-menu .ui.icon.menu .item > .icon:not(.dropdown) {
				display: inline-block;
				margin:0;
				margin-right: 16px;
			}
			.page-menu .ui.menu .item > .title {
				display: none;
				font-size: 14px;
				font-weight: 300;
				font-family: "Open sans", sans-serif;
			}
			.page-menu .ui.menu .item.active:hover {
				background-color: #36c6d3;
				color:#FFF;
			}
			.page-menu .ui.menu .item:hover {
				background: #2C3542;
				color:#b4bcc8;
				width: 245px;
				z-index: 8;
			}
			.page-menu .ui.menu .item:hover > .title {
				display: inline-block;
			}
			.ui.fixed.menu + .ui.grid.page-body {
				margin:0;
				background: rgb(54, 65, 80);
				padding-top:50px;
			}
			.ui.grid.page-body > .page-menu,
			.ui.grid.page-body > .page-content  {
				padding-left: 0;
				padding-right: 0;
			}
			.ui.grid.page-body .page-menu {
				width:45px;
			}
			.ui.grid.page-body .page-content {
				width: calc(100% - 45px);
				background: #eef1f5;
				padding: 25px 20px 10px;
			}
			.ui.grid.page-body .page-content.light {
				background: #FFF;
			}
			.ui.manga.menu {
				height: 50px;
				background-color: #2b3643;
				font-family: "Open sans", sans-serif;
				font-weight: 300;
				font-size: 13px;
			}
			.ui.manga.menu .item {
				color:rgb(198, 207, 218);
			}
			.ui.manga.menu img.logo{
				height:14px;
				width:auto;
			}
		</style>

		<script>
			var vue;
			$(document).ready(function () {
				vue = new Vue({
					el: 'body',
					ready: function() {
						Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
					}
				});

				$('.ui.dropdown.menubar').dropdown();
				$('.blurring.image').dimmer({on: 'hover'});
				$('.ui.rating').rating({maxRating:5});
				$('.ui.progress').progress();
				$('.ui.fluid.accordion').accordion();
			});
		</script>
		@section('pageFooter')
		@include('footer')
		@show
	</body>
</html>