<template>
	<div class="field">
		<label>{{label}}</label>
		<button class="ui labeled small icon button"><i class="icon upload"></i> Upload</button>
	</div>
</template>

<script>
	module.exports = {
		props: {
			name: { required: true, type: String },
			label: { required: false, type: String, default: null },
			defaultValue: { required: false, type: String, default: null },
			multiple: { required: false, type: Boolean, default: false }
		},
		data: function () {
			return {
				valueArr: [],
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