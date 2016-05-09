@extends('manga::master')

@section('title')
@parent - Category
@endsection

@set('routeurl', route('manga.home') . "?tags[]={id}")

@section('content')
<div class="sixteen wide column">
	<h3 class="ui header dividing">Tags</h3>
	<vue-form name="tags"
	action-refresh="get-all-tags">
		<vue-list :with-link="true"
		link-format="{{ $routeurl }}"
		text="text"></vue-list>
	</vue-form>
</div>
@endsection
