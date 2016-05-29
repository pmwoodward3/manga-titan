@extends('admin::master')

@section('title')
@parent - Users
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Users</a>
@endsection

@section('page-header')
Users
@endsection

@section('page-subheader')
user control
@endsection

@section('left-side-content')
<vue-form
name="user-list"
target-add="user-form"
target-edit="user-form"
action-refresh="get-user"
action-delete="delete-user"
:class="['accordion', 'styled', 'fluid']">
	<vue-form-title
	title="Users Control"
	icon="users"
	:button-add="true"
	:button-refresh="true"
	:button-delete="true"
	></vue-form-title>

	<div class="content active">
		<vue-table
		:class="['selectable']"
		:can-edit="true"
		:can-delete="true"
		:maps="[
			{text: 'Email', key: 'email'},
			{text: 'Register At', key: 'created_at'},
			{text: 'Activated', key: 'completed'}
		]"
		:with-check="true"
		:with-control="true"></vue-table>
	</div>
</vue-form>
@endsection

@section('right-side-content')
<vue-form
name="user-form"
action-save="save-user"
:class="['accordion', 'styled', 'fluid']"
:hidden="true">
	<vue-form-title
	title="User Form"
	icon="user"
	:button-save="true"
	:button-cancel="true"
	:page="false"
	></vue-form-title>

	<div class="content active">
		<vue-input name="id" type="hidden" :class="['hidden','transition']"></vue-input>
		<vue-input name="email" label="Email" placeholder="Email"></vue-input>
		<vue-input name="password" label="Password" type="password" placeholder="Password"></vue-input>
		<vue-checkbox name="is_active" label="Activate" placeholder="Register and active user."></vue-checkbox>
	</div>
</vue-form>
@endsection