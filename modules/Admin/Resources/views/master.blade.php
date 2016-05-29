@extends('master')

@section('pageScript')
<script src="{{ Module::asset('admin:js/main.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.ui.labeled.icon.sidebar').sidebar({transition:'overlay'});
		$('#sidebar-menu').click(function () {
			$('.ui.labeled.icon.sidebar').sidebar('toggle');
		});
	});
</script>
@endsection

@section('pageStyle')
<link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
@endsection

@section('pageContent')
<app-page url-ajax="{{ route('core.ajax') }}" id="admin-grid">
	<div id="admin-area" class="sixteen wide column">
		@section('content')
		<div class="ui grid">
			<div class="ten wide column form-admin" id="admin-side-left">
				@yield('left-side-content')
			</div>
			<div class="six wide column form-admin" id="admin-side-right">
				@yield('right-side-content')
			</div>
		</div>
		@show
	</div>
</app-page>
@endsection

@section('pageMenu')
@parent
@endsection

@section('pageMenubar')
@include('admin::menubar')
@endsection

@section('pageSideMenu')
@include('admin::sidemenu')
@endsection
