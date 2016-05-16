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
	<div class="sixteen wide column">
		@yield('content')
	</div>
</app-page>
@endsection

@section('pageSideMenu')
@include('users::sidemenu')
@endsection

@section('pageMenubar')
@include('users::menubar')
@endsection

@section('page-header')
Profile
@endsection

@section('page-subheader')
My Profile
@endsection

@section('breadcrumb')
<a class="section">Home</a>
<i class="circle icon divider"></i>
<a class="section">Profile</a>
@endsection
