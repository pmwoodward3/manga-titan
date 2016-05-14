@extends('master')

@section('pageContent')
<div class="ui container">
	<div class="ui error">
		<div class="value red-font">404</div>
		<div class="detail">
			<h3>Oops! You're lost.</h3>
			<p>We can not find the page you're looking for. Return home or try the search bar below.</p>
		</div>
	</div>
</div>
<style type="text/css">

	.ui.error .value,
	.ui.error .detail > h3,
	.ui.error .detail > p {
		font-family:"Open Sans",sans-serif;
		font-weight: 300;
	}

	.ui.error .value.red-font {
		color: #e7505a !important;
		letter-spacing: -10px;
		line-height: 128px;
		font-size: 128px;
	}

</style>
@endsection
