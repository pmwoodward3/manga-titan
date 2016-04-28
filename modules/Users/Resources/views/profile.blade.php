@extends('users::master')

@section('title')
@parent - My Profile
@endsection

@section('content')
<div class="ui green segment">
	<h3 class="ui header dividing">Profile</h3>
	<div class="ui grid">
		<div class="four wide column">
			<vue-new-form name="photo" :hide-on-save="false">
				<div class="field">
					<label></label>
					<vue-image :class="['small']" src="/manga/image/thumb/dummy.png"></vue-image>
				</div>
				<vue-upload name="newphoto" label="Upload Photo"></vue-upload>
			</vue-new-form>
		</div>
		<div class="twelve wide column">
			<vue-new-form name="profile">
				<div class="two fields">
					<vue-input name="f_name" label="First Name"></vue-input>
					<vue-input name="l_name" label="Last Name"></vue-input>
				</div>
				<div class="fields">
					<vue-select :class="['seven', 'wide']" label="Country" name="country"
					placeholder = "Select Country"
					value-source="get-country"></vue-select>
					<div class="nine wide field">
						<label>Date of birth</label>
						<div class="fields">
							<vue-input name="day" :class="['four','wide']"></vue-input>
							<vue-input name="month" :class="['eight','wide']"></vue-input>
							<vue-input name="year" :class="['four','wide']"></vue-input>
						</div>
					</div>
				</div>
				<vue-textarea name="about" label="About Me"></vue-textarea>
				<button class="ui button labeled icon small green" type="submit"><i class="icon save"></i> Save Profile</button>
			</vue-new-form>
		</div>
	</div>
</div>
@endsection