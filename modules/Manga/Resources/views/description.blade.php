@extends('manga::master')

@section('title')
@parent - Description
@endsection

@set('tagsurl', str_ireplace(['%7B','%7D'],['{','}'], route('manga.tags', ['{item}'])))
@set('categoryurl', str_ireplace(['%7B','%7D'],['{','}'], route('manga.category', ['{item}'])))
@set('artisturl', str_ireplace(['%7B','%7D'],['{','}'], route('manga.artist', ['{item}'])))
@set('routeurl', str_ireplace(['%7B','%7D'],['{','}'], route('manga.read',[$id_manga, '{page}'])))
@section('content')
<div class="sixteen wide column">
	<h3 class="ui header dividing">Description</h3>
	<vue-form
	name="category"
	action-refresh="detail-manga"
	:params="[{name:'id', value: {{$id_manga}} }]">
		<div class="ui stackable grid manga-grid">
			<vue-desc>
				<vue-desc-image slot="left" name="thumb"></vue-desc-image>
				<vue-desc-content slot="right" :maps="[
					{label:'Title', key:'title', type:'text'},
					{label:'Synopsis', key:'description', type:'text'},
					{label:'Artist', key: 'artist', type:'link', format:'{{$artisturl}}', class:['ui','basic','label']},
					{label:'Tags', key:'tags', type:'link', format:'{{$tagsurl}}', class:['ui','tag','label','green']},
					{label:'Category', key:'category', type:'link', format:'{{$categoryurl}}'},
					{label:'Rating', key:'rating', type:'rating'},
					{label:'Views', key:'views', type:'number', pluralize:'View'},
					{label:'Uploaded at', key:'created_at', type:'text'},
					{label:'Uploader', key:'uploader', type:'text'}
				]"></vue-desc-content>
			</vue-desc>
		</div>
	</vue-form>
	<h3 class="ui header dividing">Thumbs</h3>
	<vue-form action-refresh="get-thumb-page" :params="[{name:'id_manga', value: {{$id_manga}} }]" name="thumb">
		<div class="ui stackable grid manga-grid">
			<vue-grid
			:maps="{id:'id', title:'title', image:'image'}"
			:can-select="false"
			:with-link="true"
			link-format="{{$routeurl}}"></vue-grid>
			<vue-pagination></vue-pagination>
		</div>
	</vue-form>
	<vue-form action-refresh="get-comment" action-save="save-comment" :params="[{name:'id_manga', value: {{$id_manga}} }]" name="comment" :reset-on-save="true" :hide-on-save="false">
		<div class="ui stackable grid manga-grid">
			<vue-list
			list-type="comment"
			:maps="{author:'author', image: 'image', comment: 'comment', created_at: 'created_at'}"
			:with-extra="true"></vue-list>
		</div>
		<div class="ui stackable grid manga-grid">
			<div class="ui form" style="max-width:650px;width:100%;">
				<div class="field">
					<textarea name="comment"></textarea>
				</div>
				<button class="ui blue labeled submit icon button" type="submit">
					<i class="icon edit"></i> Add Comment
				</button>
			</div>
		</div>
	</vue-form>
</div>
@endsection