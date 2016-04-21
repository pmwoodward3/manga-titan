@extends('users::master')

@section('title')
@parent - My Profile
@endsection

@section('content')
@include('users::leftmenu')
<div class="twelve wide column">
	<div class="ui green segment">
		<h3 class="ui header dividing">My Manga</h3>
		<form class="ui form">
			<table class="ui very basic table">
				<thead>
					<tr>
						<th>Manga</th>
						<th>Page</th>
						<th>Price</th>
						<th>Views</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="n in 20">
						<td>Megapa	</td>
						<td>124 Pages</td>
						<td>$5.00</td>
						<td>1234 Views</td>
						<td>
							<i class="icon list"></i>
							<i class="icon pencil"></i>
							<i class="icon remove"></i>
						</td>
					</tr>
				</tbody>
			</table>
			<button class="ui icon labeled button"><i class="icon upload"></i> Upload</button>
		</form>
	</div>
</div>
@endsection