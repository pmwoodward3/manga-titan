@extends('users::master')

@section('title')
@parent - Subscribe
@endsection

@section('content')
<div class="ui green segment">
	<h3 class="ui header dividing">Subscribe</h3>
	<div class="ui vertical fluid menu">
		<div class="item" v-for="n in 3">
			<h3 class="ui dividing header">Free</h3>
			<ul>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
			</ul>
			<button class="ui disabled button">Current Active</button>
		</div>
	</div>
</div>
@endsection