@extends('master')

@section('title')
@parent - Login
@endsection

@section('page-breadcrumb')
@endsection

@section('pageContent')
<div class="ui grid centered container">
	<div class="six wide column">
		<form class="ui form login" action="" method="post">
			{!! csrf_field() !!}
			<div class="form-title">Sign In</div>
			<div class="form-field">
				<div class="field">
					<input type="text" name="email" placeholder="Email Address">
				</div>
				<div class="field">
					<input type="password" name="password" placeholder="Password">
				</div>
				<button class="ui button teal">Log In</button>
				<div class="ui checkbox">
					<input class="hidden" tabindex="0" type="checkbox">
					<label>Remember Me</label>
				</div>				
			</div>
			<div class="form-footer">
				<a href="{{ route('user.register') }}">Create Account</a>
			</div>
		</form>
		@if($errors->count() > 0)
					
			@foreach ($errors->all() as $error)
			<div class="ui message warning">{{ $error }}</div>
			@endforeach
			
		@endif
	</div>
</div>
@endsection