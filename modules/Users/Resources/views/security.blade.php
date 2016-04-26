@extends('users::master')

@section('title')
@parent - Security
@endsection

@section('content')
<div class="ui two column grid">
	<div class="column">
		<div class="ui green segment">
			<h3 class="ui header dividing">Change Password</h3>
			<vue-new-form
			name="password"
			:prevent-submit="false"
			action="{{ route('user.post.security') }}"
			:params="[{name:'_token', value:'{{ csrf_token() }}'}]">
				<vue-input type="password" name="current_password" label="Current Password" placeholder="Current Password"></vue-input>
				<vue-input type="password" name="password" label="New Password" placeholder="New Password"></vue-input>
				<vue-input type="password" name="password_repeat" label="Repeat Password" placeholder="Repeat Password"></vue-input>
				<button class="ui button small green" type="submit">Change Password</button>
			</vue-new-form>
			@if($errors->count() > 0)
						
				@foreach ($errors->all() as $error)
				<div class="ui message warning">{{ $error }}</div>
				@endforeach
				
			@endif
			@if (session('message'))

				<div class="ui message success">{{ session('message') }}</div>

			@endif
		</div>
	</div>
	<div class="column">
		<div class="ui blue segment">
			<h3 class="ui header dividing">E-Mail</h3>
			<vue-new-form name="email" action-save="change-email">
				<vue-input name="email" default-value="{{ Sentinel::getUser()->email }}" label="Current Email"></vue-input>
				<vue-checkbox name="publish" label="Publish Email"></vue-checkbox>
				<button type="submit" class="ui button small blue">Change Email</button>
			</vue-new-form>
		</div>
	</div>
</div>
@endsection