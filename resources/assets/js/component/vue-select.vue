<template>
	<div class="field" :class="class">
		<label>{{ label }}</label>
		<select class="ui dropdown search" :class="myClass" :id="dropdown">
			<option value=""></option>
			<option v-for="item in options" :value="item.value" v-text="item.text"></option>
		</select>
	</div>
</template>

<script>
	module.exports = {
		props: {
			name:			{ required: true, type: String },
			label:			{ required: false, type: String, default: null },
			class:			{ required: false, type: Array, default: function () {return [];} },
			values:			{ required: false, type: Array, default: function () {return [];} },
			allowAdd: 		{ required: false, type: Boolean, default: false },
			valueSource:	{ required: false, type: String, default: null }
		},
		computed: {
			selector: function () {
				return '.ui.dropdown.' + this.name + '-dropdown';
			},
			myClass: function () {
				return [this.name + '-dropdown'];
			}
		},
		data: function () {
			return {
				options: []
			}
		},
		events: {
			'flash-field': function (data) {
				//
			},
			'clear-field': function () {
				//
			},
			'refresh-dropdown': function () {
				var that = this;
				var allow = that.allowAdd?true:false;
				if (this.valueSource != null) {
					//
				} else {
					//
				}
				this.$nextTick(function () {
					$(that.selector).dropdown({allowAdditions:allow});
				});
			}
		},
		ready: function () {
			if (this.values.length > 0) this.options = this.values;
			this.$emit('refresh-dropdown');
		}
	}
</script>