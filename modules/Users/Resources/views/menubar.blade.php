@set('user', Sentinel::getUser())
@set('routename', Request::route()->getName())

<div class="right menu">
	<div class="ui pointing dropdown menubar link item">
		<span class="text">{{ $user->first_name }} {{ $user->last_name }}</span>
		<i class="dropdown icon"></i>
		<div class="menu">
			<a href="{{ route('manga.home') }}" class="item">Back To Manga</a>
			<div class="divider"></div>
			@if (Sentinel::hasAccess('admin'))
			<a href="{{ route('admin.home') }}" class="item">Admin Control</a>
			<div class="divider"></div>
			@endif
			<a href="{{ route('user.profile') }}" class="item">My Profile</a>
			<a href="{{ route('user.security') }}" class="item">Change Password</a>
			<a href="{{ route('user.logout') }}" class="item">Log Out</a>
		</div>
	</div>
</div>