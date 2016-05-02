@extends('admin::master')

@section('title')
@parent - Page
@endsection

@section('content')
<div class="ui grid">
	<div class="sixteen wide column form-admin" id="admin-side-left">
		<vue-form
		name="page-list"
		target-add="page-form"
		target-edit="page-form"
		action-delete="delete-page"
		action-save="save-page"
		action-refresh="get-page"
		:hide-on-save="false"
		:params = "[{name:'id_manga', value:{{$id_manga}} }]"
		>
			<vue-form-title
			title="Page List"
			icon="file"
			:button-add="true"
			:button-refresh="true"
			:button-delete="true"
			>
				<a slot="right" href="{{ route('admin.manga') }}" class="ui red icon button"><i class="icon share"></i></a>
			</vue-form-title>
			<div class="ui segment form-content">
				<vue-grid
				:can-detail="false"
				:can-edit="false"
				:maps="{id:'id', title:'title', image:'image'}"></vue-grid>
			</div>
			<vue-form-footer></vue-form-footer>
		</vue-form>
	</div>
</div>
<vue-media
	name="page-form"
	form-target-set="page-list"></vue-media>
@endsection