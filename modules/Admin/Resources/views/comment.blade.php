@extends('admin::master')

@section('title')
@parent - Comments
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Comment</a>
@endsection

@section('page-header')
Comments
@endsection

@section('page-subheader')
user comments
@endsection

@section('left-side-content')
<vue-form
name="comment-list"
target-add="comment-form"
target-edit="comment-form"
action-refresh="get-comment"
action-delete="comment-delete"
:class="['accordion', 'styled', 'fluid']">

	<vue-form-title
	title="Comments"
	icon="comments"
	:button-refresh="true"
	:button-delete="true"
	></vue-form-title>

	<div class="content active"></div>
</vue-form>
@endsection

@section('right-side-content')
<vue-form
name="comment-list"
target-add="comment-form"
target-edit="comment-form"
action-save="save-comment"
:class="['accordion', 'styled', 'fluid']"
:hidden="false">
	<vue-form-title
	title="Comment Detail"
	icon="comment"
	:button-delete="true"
	:button-cancel="true"
	:page="false"
	></vue-form-title>

	<div class="content active">
		<div class="field"><label>on manga</label><a class="ui link" href="manga">Manga Link</a></div>
		<div class="field"><label>by user</label><a class="ui link" href="manga">Admin admin</a></div>
		<div class="field"><label>reply from</label><a class="ui link" href="manga">None</a></div>
		<div class="field"><label>comment at</label><a class="ui input" href="manga">12/12/2016 14:00</a></div>
		<div class="field"><label>comment</label><textarea cols="30" rows="2" readonly>safafsfa</textarea></div>
	</div>
</vue-form>
@endsection