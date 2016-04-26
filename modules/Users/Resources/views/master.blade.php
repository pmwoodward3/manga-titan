@extends('master')

@section('pageScript')
<script src="{{ Module::asset('users:js/main.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script>
	$(document).ready(function () {
		$('.ui.dropdown').dropdown();
	});
</script>
@endsection

@section('pageStyle')
<link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
@endsection

@section('pageContent')
<app-page url-ajax="{{ route('core.ajax') }}" :class="['container']">
	@include('users::leftmenu')
	<div class="twelve wide column">
		@yield('content')
	</div>
</app-page>
@endsection

@section('pageMenubar')
@include('users::menubar')
@endsection

@section('pageFooter')

@endsection