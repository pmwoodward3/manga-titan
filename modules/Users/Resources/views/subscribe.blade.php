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
				<th>
					<h3>Basic</h3>
					<button class="ui disabled tiny button green">Current Active</button>
				</th>
				<th>
					<h3>Pro</h3>
					<button class="ui tiny button green">Active</button>
				</th>
				<th>
					<h3>Elite</h3>
					<button class="ui tiny button green">Active</button>
				</th>
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
		</tbody>
	</table>
</div>
@endsection