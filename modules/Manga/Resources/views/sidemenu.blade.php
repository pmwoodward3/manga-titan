<a href="{{ route('manga.home') }}" class="item {{ $routename!='manga.home'?'':'active' }}">
	<i class="icon home"></i>
	<span class="title">Home</span>
</a>
<a href="{{ route('manga.category') }}" class="item {{ $routename!='manga.category'?'':'active' }}">
	<i class="icon book"></i>
	<span class="title">Category</span>
</a>
<a href="{{ route('manga.tags') }}" class="item {{ $routename!='manga.tags'?'':'active' }}">
	<i class="icon tags"></i>
	<span class="title">Tags</span>
</a>
<a href="" class="item">
	<i class="icon calendar"></i>
	<span class="title">Events</span>
</a>
<a href="{{ route('manga.newest') }}" class="item {{ $routename!='manga.newest'?'':'active' }}">
	<i class="icon newspaper"></i>
	<span class="title">News</span>
</a>