@extends('manga::master')

@section('title')
@parent - Category
@endsection

@set('routeurl', route('manga.home') . '?category={id}')

@section('content')
<div class="sixteen wide column">
	<h3 class="ui header dividing">Category</h3>
	<vue-form name="category"
	action-refresh = "get-home-category">
		<vue-grid
		:maps="{id:'value', title:'text', image:'image'}"
		:can-select="false"
		:with-link="true"
		link-format="{{$routeurl}}"></vue-grid>
	</vue-form>
</div>
@endsection
