@extends('admin::master')

@section('title')
@parent - Category
@endsection

@section('content')
<div class="ui grid">
	<div class="nine wide column form-admin" id="admin-side-left">
		<vue-form
		name="category-list"
		target-add="category-form"
		target-edit="category-form"
		action-delete="delete-category"
		action-refresh="get-category"
		>
			<vue-form-title
			title="Category List"
			icon="filter"
			:button-add="true"
			:button-refresh="true"
			:button-delete="true"
			></vue-form-title>
			<vue-form-content>
				<vue-table
				:class="['very','basic','selectable','form-table']"
				:can-edit="true"
				:can-delete="true"
				:maps="[
					{text: 'Category', key:'category'},
					{text: 'Count', key:'used'}
				]"
				:with-check="true"
				:with-control="true"
				></vue-table>
			</vue-form-content>
			<vue-form-footer></vue-form-footer>
		</vue-form>
	</div>
	<div class="seven wide column form-admin" id="admin-side-right">
		<vue-form
		name="category-form"
		action-save="save-category"
		:hidden="true"
		>
			<vue-form-title
			title="Category Form"
			icon="filter"
			:button-save="true"
			:button-cancel="true"
			></vue-form-title>

			<vue-form-fields>
				<vue-input name="id" type="hidden" :class="['transition', 'hidden']"></vue-input>
				<vue-input name="category" label="Category"
				placeholder="Category"></vue-input>
				<vue-textarea name="desc" label="Description"
				placeholder="Description"></vue-textarea>
				<vue-upload name="thumb" :show-preview="true" label="Category Thumb"></vue-upload>
			</vue-form-fields>
		</vue-form>
		@include('admin::empty')
	</div>
</div>
@endsection