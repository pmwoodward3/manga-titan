@extends('admin::master')

@section('title')
@parent - Manga
@endsection

@set('routeurl',route('admin.page','{id}'))
@set('routeurl', str_ireplace(['%7B','%7D'],['{','}'], $routeurl))
@section('content')
<div class="ui grid">
	<div class="nine wide column form-admin" id="admin-side-left">
		<vue-form
		name="manga-list"
		target-add="manga-form"
		target-edit="manga-form"
		action-refresh="get-manga"
		action-delete="delete-manga"
		>
			<vue-form-title
			title="Manga List"
			icon="book"
			:button-add="true"
			:button-refresh="true"
			:button-delete="true"
			></vue-form-title>
			<div class="ui segment form-content">
				<vue-table
				:href="{
				detail:{enable:true,format:'{!! $routeurl !!}'},
				edit:{enable:false,format:'{0}'},
				delete:{enable:false,format:'{0}'}
				}"
				:with-check = "true"
				:with-control = "true"
				:can-delete = "true"
				:can-edit = "true"
				:class="['very','basic','selectable','form-table']"
				:maps="[
					{text: 'Manga', key: 'title'},
					{text: 'Page Count', key: 'page'},
					{text: 'Uploaded At', key: 'created_at'}
				]"
				></vue-table>
			</div>
			<vue-form-footer></vue-form-footer>
		</vue-form>
	</div>
	<div class="seven wide column form-admin" id="admin-side-right">
		<vue-form
		name="manga-form"
		action-save="save-manga"
		:hidden="true"
		>
			<vue-form-title
			title="Manga Form"
			icon="book"
			:button-save="true"
			:button-cancel="true"
			></vue-form-title>
			<vue-form-fields>
				<vue-input name="id" type="hidden"></vue-input>
				<vue-input name="title" label="Manga Title" placeholder="Manga Title"></vue-input>

				<vue-textarea name="description" label="Description" placeholder="Description"></vue-textarea>
				<vue-select name="category" label="Category" value-source="source-category" :allow-add="true" placeholder="Select Category"></vue-select>
				<vue-select name="tags" label="Tags" value-source="source-tags" :multiple="true" :allow-add="true" placeholder="Select Tags"></vue-select>
				
				<vue-upload name="thumb" label="Manga Thumbnail" :show-preview="true"></vue-upload>
			</vue-form-fields>
		</vue-form>
		@include('admin::empty')
	</div>
</div>
@endsection