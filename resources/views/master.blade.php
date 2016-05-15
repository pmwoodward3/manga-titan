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
			<div class="ui inverted borderless manga menu">
				<div class="ui container fluid">
					<div class="header item">
						<img class="logo" src="{{ asset('logo.png') }}">
					</div>
					@yield('pageMenubar')
				</div>
			</div>
			@show
			@yield('pageContent')
		</div>

		<style>
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