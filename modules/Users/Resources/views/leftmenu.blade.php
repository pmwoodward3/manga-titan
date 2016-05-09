@set('routename', Request::route()->getName())
<div class="four wide column">
	<div class="ui fluid vertical menu">
		<div class="item menu-header">User Settings</div>
		<a href="{{ route('user.profile') }}" class="item {{ ($routename!='user.profile')?:'active'}}"><i class="icon user"></i> Bacic Info</a>
		<a href="{{ route('user.security') }}" class="item {{ ($routename!='user.security')?:'active'}}"><i class="icon lock"></i> Security</a>
		<a href="{{ route('user.manga') }}" class="item {{ ($routename!='user.manga')?:'active'}}"><i class="icon book"></i> My Manga</a>
	</div>

	<div class="ui fluid vertical menu">
		<div class="item menu-header">User Billing</div>
		<a href="{{ route('user.subscribe') }}" class="item {{ ($routename!='user.subscribe')?:'active'}}"><i class="icon suitcase"></i> Subscribe</a>
		<a href="{{ route('user.payment') }}" class="item {{ ($routename!='user.payment')?:'active'}}"><i class="icon payment"></i> Payment</a>
		<a href="{{ route('user.notify') }}" class="item {{ ($routename!='user.notify')?:'active'}}"><i class="icon info circle"></i> Notification</a>
	</div>
</div>