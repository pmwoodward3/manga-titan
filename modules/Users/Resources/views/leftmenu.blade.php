@set('routename', Request::route()->getName())
<div class="four wide column">
	<div class="ui fluid vertical menu">
		<a href="{{ route('user.profile') }}" class="item"><i class="icon user"></i> Bacic Info</a>
		<a href="{{ route('user.security') }}" class="item"><i class="icon lock"></i> Security</a>
		<a href="{{ route('user.manga') }}" class="item"><i class="icon book"></i> My Manga</a>
		<a href="{{ route('user.payment') }}" class="item"><i class="icon payment"></i> Payment</a>
		<a href="{{ route('user.notify') }}" class="item"><i class="icon info circle"></i> Notification</a>
	</div>
</div>