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
@include('users::menubar')
<div class="ui container grid">
	@yield('content')
</div>
@include('users::footer')
@endsection