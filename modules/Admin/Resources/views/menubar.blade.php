@set('user', Sentinel::getUser())
@set('routename', Request::route()->getName())

@section('pageMenu')
<div id="admin-menu" class="ui borderless menu">
	<div class="ui container">
		<div class="item header">
			<img class="logo" src="{{ asset('logo.png') }}">
			Manga Titan
		</div>
		<a class="item {{ ($routename!='admin.home')?:'active' }}" href="{{ route('admin.home') }}">Home</a>
		<a class="item {{ ($routename!='admin.manga')?:'active' }}" href="{{ route('admin.manga') }}">Manga</a>
		<a class="item {{ ($routename!='admin.tag')?:'active' }}" href="{{ route('admin.tag') }}">Tags</a>
		<a class="item {{ ($routename!='admin.category')?:'active' }}" href="{{ route('admin.category') }}">Categories</a>
		<a class="item {{ ($routename!='admin.comment')?:'active' }}" href="{{ route('admin.comment') }}">Comments</a>
		<a class="item {{ ($routename!='admin.user')?:'active' }}" href="{{ route('admin.user') }}">Users</a>
		<div class="right menu">
			<div class="ui pointing dropdown menubar link item">
				<span class="text">{{ $user->first_name }} {{ $user->last_name }}</span>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a href="{{ route('manga.home') }}" class="item">Back to Manga</a>
					<div class="divider"></div>
					<a href="{{ route('user.profile') }}" class="item">My Profile</a>
					<a href="{{ route('user.security') }}" class="item">Change Password</a>
					<a href="{{ route('user.logout') }}" class="item">Log Out</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection