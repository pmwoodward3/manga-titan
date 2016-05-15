@set('user', Sentinel::getUser())
@set('routename', Request::route()->getName())

<a href="{{ route('manga.home') }}"			class="item {{ $routename!='manga.home'?'':'active' }}">Home</a>
<a href="{{ route('manga.category') }}"		class="item {{ $routename!='manga.category'?'':'active' }}">Category</a>
<a href="{{ route('manga.tags') }}"			class="item {{ $routename!='manga.tags'?'':'active' }}">Tags</a>
<a href="{{ route('manga.newest') }}"		class="item {{ $routename!='manga.newest'?'':'active' }}">Newest</a>
<!-- <a href="{{ route('manga.favorite') }}"		class="item {{ $routename!='manga.favorite'?'':'active' }}">My Favorite</a> -->
<div class="right menu">
	<a href="" class="item icon"><i class="icon large alarm outline"></i></a>
	<!-- <a href="" class="item icon"><i class="icon large mail outline"></i></a> -->
	<a href="" class="item icon"><i class="icon large calendar"></i></a>
	<div class="ui pointing dropdown menubar link item">
		<img src="{{ url('manga/image/thumb/dummy-user.png') }}" class="ui user image circular">
		<span class="text">{{ $user->first_name }} {{ $user->last_name }}</span>
		<i class="dropdown icon"></i>
		<div class="menu">
			@if (Sentinel::hasAccess('admin'))
			<a href="{{ route('admin.home') }}" class="item"><i class="icon settings"></i>Admin Control</a>
			<div class="divider"></div>
			@endif
			<a href="{{ route('user.profile') }}" class="item"><i class="icon user"></i>My Profile</a>
			<a href="{{ route('user.profile') }}" class="item"><i class="icon alarm outline"></i>My Notification</a>
			<div class="divider"></div>
			<a href="{{ route('user.logout') }}" class="item"><i class="icon sign out"></i>Log Out</a>
		</div>
	</div>
	<a href="" class="item icon"><i class="icon large sign out"></i></a>
</div>
<style>
	.ui.user.image {
		height: 29px;
		margin-right: 5px;
	}
	.ui.menu .dropdown.item .menu {
		border-radius: 0;
		box-shadow: 5px 5px rgba(102,102,102,.1);
	}
</style>