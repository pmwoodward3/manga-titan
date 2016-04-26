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
			<vue-new-form name="email">
				<vue-input name="field" default-value="field" label="Current Email" :is-readonly="true"></vue-input>
				<div class="ui small buttons">
					<button type="button" class="ui button blue">Change Email</button>
					<button type="button" class="ui button red">Don't Publish Email</button>
				</div>
			</vue-new-form>
		</div>
	</div>
</div>
@endsection