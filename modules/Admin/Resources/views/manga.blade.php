@extends('admin::master')

@section('content')
<div class="ui grid">
	<div class="nine wide column form-admin" id="admin-side-left">
		<manga-list form-id="manga-list"></manga-list>
	</div>
	<div class="seven wide column form-admin" id="admin-side-right">
		<manga-form form-id="manga-form" :is-hidden="true"></manga-form>
		@include('admin::empty')
	</div>
</div>
@endsection