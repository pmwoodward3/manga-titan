@extends('users::master')

@section('title')
@parent - Security
@endsection

@section('content')
<div class="ui two column grid">
	<div class="column">
		<div class="ui green segment">
			<h3 class="ui header dividing">Change Password</h3>
			<form class="ui form" action="" method="post">
				{!! csrf_field() !!}

				<div class="field"><label for="">Current Password</label><input type="password" name="current_password"></div>
				<div class="field"><label for="">New Password</label><input type="password" name="password"></div>
				<div class="field"><label for="">Repeat Password</label><input type="password" name="password_repeat"></div>

				<button class="ui button small green">Change Password</button>

			</form>
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
			<form class="ui form" action="" method="post">
				<table class="ui very basic collapsing table">
					<tbody>
						<tr>
							<td>Admin@admin.com</td>
							<td>
								<button class="ui mini button blue">Change Email</button>
								<!-- <button class="ui mini button green">Make it public</button> -->
								<button class="ui mini button red">Don't make it public</button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
@endsection