@extends('admin::master')

@section('title')
@parent - Tags
@endsection

@section('content')
<div class="ui grid">
	<div class="nine wide column form-admin" id="admin-side-left">
		<vue-form
		name="tag-list"
		target-add="tag-form"
		target-edit="tag-form"
		action-refresh="get-tags"
		action-delete="delete-tags"
		>
			<vue-form-title
			title="Tag List"
			icon="tags"
			:button-add="true"
			:button-refresh="true"
			:button-delete="true"
			></vue-form-title>
			<div class="ui segment form-content">
			<vue-table
			:class="['very','basic','selectable','form-table']"
			:can-delete="true"
			:can-edit="true"
			:maps="[
				{text:'Tag', key:'tag'},
				{text:'Count', key:'used'}
			]"
			:with-check="true"
			:with-control="true"
			></vue-table>
			</div>
			<vue-form-footer></vue-form-footer>
		</vue-form>
	</div>
	<div class="seven wide column form-admin" id="admin-side-right">
		<vue-form
		name="tag-form"
		action-save="save-tags"
		:hidden="true">
			<vue-form-title
			title="Tag Form"
			icon="tag"
			:button-save="true"
			:button-cancel="true"
			></vue-form-title>

			<vue-form-fields>
				<vue-input name="id" :class="['ui', 'hidden', 'transition']" type="hidden"></vue-input>
				<vue-input name="tag" label="Tag Name"
				placeholder="Tag Name"></vue-input>
				<vue-textarea name="desc" label="Description"
				placeholder="Tag Description"></vue-textarea>
			</vue-form-fields>
		</vue-form>
		@include('admin::empty')
	</div>
</div>
@endsection