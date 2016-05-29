<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@section('title') Manga Titan @show</title>
		<link rel="stylesheet" href="{{ asset('css/semantic.css')}}">
		<link rel="stylesheet" href="{{ asset('css/app.css')}}">
		<script src="{{ asset('js/jquery-2.2.2.min.js')}}"></script>
		<script src="{{ asset('js/semantic.min.js')}}"></script>
		<script src="{{ asset('js/vue.js')}}"></script>
		<!--============================ Page Style Here    ===========================-->
		@yield('pageStyle')
		<!--============================ Page Script Here   ===========================-->
		@yield('pageScript')
		<style>
			.ui.user.image {
				height: 29px;
				margin-right: 5px;
			}
			.ui.menu .dropdown.item .menu {
				border-radius: 0;
				box-shadow: 5px 5px rgba(102,102,102,.1);
			}
		</style>
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
				<div class="page-content column">
					@include('breadcrumb')
					@include('header')
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
			
			.font-dark {
			    color: #2f353b !important;
			}
			.uppercase {
				text-transform: uppercase;
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
			.page-menu .ui.menu .divider {
				padding-top:20px;
				padding-bottom: 20px;
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
				min-height: calc(100vh - 31px);
				margin:0;
				background: rgb(54, 65, 80);
				padding-top:50px;
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
			});
		</script>
		@section('pageFooter')
		@include('footer')
		@show
	</body>
</html>
