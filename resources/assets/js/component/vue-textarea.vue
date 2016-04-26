<template>
	<div class="field">
		<label>{{label}</label>
		<textarea :name="name" v-model="value" :readonly="isReadonly" rows="2">{{defaultValue}}</textarea>
	</div>
</template>

<script>
	module.exports = {
		props: {
			label: {
				required: false,
				type: String,
				default: null
			},
			name: {
				required: true,
				type: String
			},
			defaultValue: {
				requried: false,
				type: String,
				default: null
			},
			isReadonly: {
				required: false,
				type: Boolean,
				default: false
			}
		},
		data: function () {
			return {
				value: null
			}
		},
		events: {
			'flash-field': function (data) {
				//
			},
			'clear-field': function () {
				//
			}
		}
	}
</script>