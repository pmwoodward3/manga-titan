@extends('admin::master')

@section('title')
@parent - Manga
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Manga</a>
@endsection

@section('page-header')
Manga Management
@endsection

@section('page-subheader')
manga management
@endsection

@set('routeurl',route('admin.page','{id}'))
@set('routeurl', str_ireplace(['%7B','%7D'],['{','}'], $routeurl))
@section('content')
<div class="ui grid">
	<div class="row">
		<div class="ten wide column">
			<vue-form
			name="manga-list"
			target-add="manga-form"
			target-edit="manga-form"
			action-refresh="get-manga"
			action-delete="delete-manga"
			:class="['accordion', 'styled', 'fluid']">
				<vue-form-title
				title="MANGA LIST"
				icon="book"
				:button-refresh="true"
				:button-delete="true"
				>
					<a slot="left" class="ui icon very basic button" href="{{ route('admin.manga.create') }}"><i class="icon plus"></i></a>
				</vue-form-title>
				<div class="content active">
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
						{text: 'Chapter', key: 'chapter'},
						{text: 'Page', key: 'page'},
						{text: 'Uploaded At', key: 'created_at'}
					]"
					></vue-table>
				</div>
			</vue-form>
		</div>
		<div class="six wide column">
			<vue-form
			name="manga-form"
			action-save="save-manga"
			:class="['accordion', 'styled', 'fluid']">
				<vue-form-title
				title="DETAIL"
				:button-save="true"
				:button-cancel="true"
				:page="false"
				></vue-form-title>
				<div class="content active">
					<vue-input name="id" type="hidden"></vue-input>
					<vue-input name="title" label="Manga Title" placeholder="Manga Title"></vue-input>

					<vue-textarea name="description" label="Description" placeholder="Description"></vue-textarea>
					<vue-select name="category" label="Category" value-source="source-category" :allow-add="true" placeholder="Select Category"></vue-select>
					<vue-select name="tags" label="Tags" value-source="source-tags" :multiple="true" :allow-add="true" placeholder="Select Tags"></vue-select>
					
					<vue-upload name="thumb" label="Manga Thumbnail" :show-preview="true"></vue-upload>
				</div>
			</vue-form>
		</div>
	</div>
</div>
@endsection
