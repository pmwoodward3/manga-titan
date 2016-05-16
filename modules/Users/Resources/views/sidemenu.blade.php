@set('routename', Request::route()->getName())
<a href="{{ route('user.profile') }}" class="item {{ ($routename!='user.profile')?:'active'}}">
	<i class="icon user"></i>
	<span class="title">Bacic Info</span>
</a>
<a href="{{ route('user.security') }}" class="item {{ ($routename!='user.security')?:'active'}}">
	<i class="icon lock"></i>
	<span class="title">Security</span>
</a>
<a href="{{ route('user.manga') }}" class="item {{ ($routename!='user.manga')?:'active'}}">
	<i class="icon book"></i>
	<span class="title">My Manga</span>
</a>

<div class="divider"></div>

<a href="{{ route('user.subscribe') }}" class="item {{ ($routename!='user.subscribe')?:'active'}}">
	<i class="icon suitcase"></i>
	<span class="title">Subscribe</span>
</a>
<a href="{{ route('user.payment') }}" class="item {{ ($routename!='user.payment')?:'active'}}">
	<i class="icon payment"></i>
	<span class="title">Payment</span>
</a>
<a href="{{ route('user.notify') }}" class="item {{ ($routename!='user.notify')?:'active'}}">
	<i class="icon info circle"></i>
	<span class="title">Notification</span>
</a>
