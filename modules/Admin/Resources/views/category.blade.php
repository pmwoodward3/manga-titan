@extends('admin::master')

@section('title')
@parent - Category
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Category</a>
@endsection

@section('page-header')
Category Management
@endsection

@section('page-subheader')
category management
@endsection

@section('left-side-content')
<vue-form
name="category-list"
target-add="category-form"
target-edit="category-form"
action-delete="delete-category"
action-refresh="get-category">
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
@endsection

@section('right-side-content')
<vue-form
name="category-form"
action-save="save-category"
:hidden="true">
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
@endsection