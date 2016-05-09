@extends('users::master')

@section('title')
@parent - Notify
@endsection

@section('content')
<div class="ui green segment">
	<h3 class="ui header dividing">Notify</h3>
	<button class="ui green button tiny">Mark as readed</button>
	<table class="ui basic table">
		<thead>
			<tr>
				<th></th>
				<th>Title</th>
				<th>Time</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td><a>Your manga 'asd' Blocked</a></td>
				<td>2 days ago</td>
				<td>
					<i class="icon unhide"></i>
					<i class="icon alarm slash"></i>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection