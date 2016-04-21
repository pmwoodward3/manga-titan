@set('user', Sentinel::getUser())

@section('pageMenu')
<div id="admin-menu" class="ui borderless menu">
	<div class="ui container">
		<div class="item header">
			<img class="logo" src="{{ asset('logo.png') }}">
			Manga Titan
		</div>
		<div class="right menu">
			<div class="ui pointing dropdown menubar link item">
				<span class="text">{{ $user->first_name }} {{ $user->last_name }}</span>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a href="{{ route('manga.home') }}" class="item">Back to Manga</a>
					<div class="divider"></div>
					<a href="{{ route('user.profile') }}" class="item">My Profile</a>
					<a href="{{ route('user.changepass') }}" class="item">Change Password</a>
					<a href="{{ route('user.logout') }}" class="item">Log Out</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection