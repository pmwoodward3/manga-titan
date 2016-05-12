@extends('admin::master')

@section('title')
@parent - Users
@endsection

@section('left-side-content')
<vue-form
name="user-list"
target-add="user-form"
target-edit="user-form"
action-refresh="get-user"
action-delete="delete-user">
	<vue-form-title
	title="Users Control"
	icon="users"
	:button-add="true"
	:button-refresh="true"
	:button-delete="true"
	></vue-form-title>

	<div class="ui segment form-content">
		<vue-table
		:class="['very','basic','selectable','form-table']"
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
	<vue-form-footer></vue-form-footer>
</vue-form>
@endsection

@section('right-side-content')
<vue-form
name="user-form"
action-save="save-user"
:hidden="true">
	<vue-form-title
	title="User Form"
	icon="user"
	:button-save="true"
	:button-cancel="true"
	></vue-form-title>

	<vue-form-fields>
		<vue-input name="id" type="hidden" :class="['hidden','transition']"></vue-input>
		<vue-input name="email" label="Email"
		placeholder="Email"></vue-input>
		<vue-input name="password" label="Password" type="password"
		placeholder="Password"></vue-input>
		<vue-checkbox name="is_active" label="Activate" placeholder="Register and active user."></vue-checkbox>
	</vue-form-fields>
</vue-form>
@endsection