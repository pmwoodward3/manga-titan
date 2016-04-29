@extends('users::master')
@set('user', Sentinel::getUser())

@section('title')
@parent - My Profile
@endsection

@section('content')
debug($user)
<div class="ui green segment">
	<h3 class="ui header dividing">Profile</h3>
	<vue-new-form name="photo" :hide-on-save="false" action-save="save-profile">
	<div class="ui grid">
		<div class="four wide column">
			<div class="ui form">
				<div class="field">
					<label>Current Photo</label>
					<vue-image src="/manga/image/thumb/{{ $user->photo }}"></vue-image>
				</div>
				<vue-upload :show-preview="true" name="newphoto" label="Upload Photo"></vue-upload>
			</div>
		</div>
		<div class="twelve wide column">
			<div class="ui form">
				<div class="two fields">
					<vue-input name="f_name" default-value="{{ $user->first_name }}" label="First Name"></vue-input>
					<vue-input name="l_name" default-value="{{ $user->last_name }}" label="Last Name"></vue-input>
				</div>
				<div class="fields">
					<vue-select :class="['seven', 'wide']" label="Country" name="country"
					placeholder = "Select Country"
					value-source="get-country"></vue-select>
					<div class="nine wide field">
						<label>Date of birth</label>
						<div class="fields">
							<vue-input name="day" :class="['four','wide']"></vue-input>
							<vue-select :class="['eight','wide']" name="month" placeholder = "Month"
							value-source="get-month"></vue-select>
							<vue-select :class="['four','wide']" name="year" placeholder="Year"
							value-source="get-year"></vue-select>
						</div>
					</div>
				</div>
				<vue-textarea name="about" default-value="{{ $user->about }}" label="About Me"></vue-textarea>
				<button class="ui button labeled icon small green" type="submit"><i class="icon save"></i> Save Profile</button>
			</div>
		</div>
	</div>
	</vue-new-form>
</div>
@endsection