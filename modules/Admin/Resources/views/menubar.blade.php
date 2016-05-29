@set('user', Sentinel::getUser())

<div class="right menu">
	<a href="" class="item icon"><i class="icon large alarm outline"></i></a>
	<a href="" class="item icon"><i class="icon large calendar"></i></a>
	<div class="ui pointing dropdown menubar link item">
		<span class="text">{{ $user->first_name }} {{ $user->last_name }}</span>
		<i class="dropdown icon"></i>
		<div class="menu">
			<a href="{{ route('manga.home') }}" class="item"><i class="icon share"></i>Back to Manga</a>
			<div class="divider"></div>
			<a href="{{ route('user.profile') }}" class="item"><i class="icon user"></i>My Profile</a>
			<a href="{{ route('user.profile') }}" class="item"><i class="icon alarm outline"></i>My Notification</a>
			<div class="divider"></div>
			<a href="{{ route('user.logout') }}" class="item"><i class="icon sign out"></i>Log Out</a>
		</div>
	</div>
	<a href="" class="item icon"><i class="icon large sign out"></i></a>
</div>
