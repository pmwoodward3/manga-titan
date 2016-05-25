@extends('admin::master')

@section('title')
@parent - Home
@endsection

@section('breadcrumb')
<a href="#" class="section">Home</a>
@endsection

@section('page-header')
Dashboard
@endsection

@section('page-subheader')
dashboard & statistics
@endsection

@section('content')
<div class="ui grid">
	<div class="row">
		<div class="eight wide column">
			<vue-form
			name="manga-form"
			action-save="save-web"
			:class="['accordion', 'styled', 'fluid']">
				<vue-form-title
				title="Basic Info"
				icon="home"
				:button-save="true"
				:page="false"
				></vue-form-title>
				<div class="content active">
					<vue-input name="title" label="Web Name"
					placeholder="Manga Titan"></vue-input>
					<vue-textarea name="desc" label="Web Description"
					placeholder="Description"></vue-textarea>

					<vue-upload
					label="Logo"
					name="thumb"
					:show-preview = "true"
					></vue-upload>
				</div>
			</vue-form>
		</div>
		<div class="eight wide column">
			<vue-form
			name="manga-form"
			:form-action="{get:'get-graph'}"
			:class="['accordion', 'styled', 'fluid']"
			>
				<vue-form-title
				title="SITE VISITS"
				:button-refresh="true"
				:page="false"
				></vue-form-title>

				<div class="content active"></div>
			</vue-form>
		</div>
	</div>
	<div class="row">
		<div class="eight wide column">
			<vue-form
			name="manga-form"
			:form-action="{save:'save-manga'}"
			:class="['accordion', 'styled', 'fluid']"
			>
				<vue-form-title
				title="CHATS"
				icon="comment"
				:page="false"
				></vue-form-title>

				<div class="content active">
					<vue-list
					list-type="comment"
					:maps="{
					comments: 'Comment',
					user: 'User'
					}"></vue-list>
				</div>
			</vue-form>
		</div>
	</div>
</div>
@endsection