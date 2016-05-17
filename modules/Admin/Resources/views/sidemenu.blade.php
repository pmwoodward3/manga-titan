@set('routename', Request::route()->getName())

<a class="item {{ ($routename!='admin.home')?:'active' }}" href="{{ route('admin.home') }}">
	<i class="icon home"></i>
	<span class="title">Home</span>
</a>
<a class="item {{ ($routename!='admin.manga')?:'active' }}" href="{{ route('admin.manga') }}">
	<i class="icon book"></i>
	<span class="title">Manga</span>
</a>
<a class="item {{ ($routename!='admin.tag')?:'active' }}" href="{{ route('admin.tag') }}">
	<i class="icon tags"></i>
	<span class="title">Tags</span>
</a>
<a class="item {{ ($routename!='admin.category')?:'active' }}" href="{{ route('admin.category') }}">
	<i class="icon filter"></i>
	<span class="title">Categories</span>
</a>
<a class="item {{ ($routename!='admin.comment')?:'active' }}" href="{{ route('admin.comment') }}">
	<i class="icon comments"></i>
	<span class="title">Comments</span>
</a>
<a class="item {{ ($routename!='admin.user')?:'active' }}" href="{{ route('admin.user') }}">
	<i class="icon user"></i>
	<span class="title">Users</span>
</a>