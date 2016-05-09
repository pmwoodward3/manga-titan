@extends('users::master')

@section('title')
@parent - My Profile
@endsection

@section('content')
<div class="ui green segment">
	<h3 class="ui header dividing">My Manga</h3>
	<form class="ui form">
		<table class="ui basic table">
			<thead>
				<tr>
					<th>Manga</th>
					<th>Page Count</th>
					<th>Price</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="n in 20">
					<td>Megapa	</td>
					<td>124</td>
					<td>$5.00</td>
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
@endsection