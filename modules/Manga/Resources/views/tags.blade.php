@extends('manga::master')

@section('title')
@parent - Category
@endsection

@section('content')
<div class="sixteen wide column">
	<h3 class="ui header dividing">Tags</h3>
	<vue-form name="tags"
	action-refresh="get-all-tags">
	</vue-form>
</div>
@endsection
