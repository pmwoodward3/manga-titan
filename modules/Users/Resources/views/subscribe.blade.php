@extends('users::master')

@section('title')
@parent - Subscribe
@endsection

@section('content')
<div class="ui green segment">
	<h3 class="ui header dividing">Subscribe</h3>
	<table class="ui table definition center aligned">
		<thead>
			<tr>
				<th></th>
				<th>Basic</th>
				<th>Pro</th>
				<th>Elite</th>
			</tr>
		</thead>
		<tbody class="">
			<tr>
				<td>Manga per Days</td>
				<td class="positive">Unlimited</td>
				<td class="positive">Unlimited</td>
				<td class="positive">Unlimited</td>
			</tr>
			<tr>
				<td>Pages per Days</td>
				<td class="negative">2500 Pages</td>
				<td class="positive">Unlimited</td>
				<td class="positive">Unlimited</td>
			</tr>
			<tr>
				<td>Can submit manga</td>
				<td class="negative">No</td>
				<td class="positive">Yes</td>
				<td class="positive">Yes</td>
			</tr>
			<tr>
				<td>No Ads</td>
				<td class="negative">No</td>
				<td class="negative">No</td>
				<td class="positive">Yes</td>
			</tr>
			<tr>
				<td></td>
				<td><button class="ui disabled tiny button green">Current Active</button></td>
				<td><button class="ui tiny button green">Active</button></td>
				<td><button class="ui tiny button green">Active</button></td>
			</tr>
		</tbody>
	</table>
	<div class="ui styled fluid accordion">
		<div class="active title">
			<i class="dropdown icon"></i>
			Basic
		</div>
		<div class="active content">
			<p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
			<ul>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
			</ul>
			<button class="ui disabled tiny button green">Current Active</button>
		</div>
		<div class="title">
			<i class="dropdown icon"></i>
			Pro
		</div>
		<div class="content">
			<p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
			<ul>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
			</ul>
			<button class="ui tiny button green">Active</button>
		</div>
		<div class="title">
			<i class="dropdown icon"></i>
			Elite
		</div>
		<div class="content">
			<p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
			<ul>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
				<li>Test for 20 days</li>
			</ul>
			<button class="ui tiny button green">Active</button>
		</div>
	</div>
</div>
@endsection