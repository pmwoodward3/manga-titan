<template>
	<div class="field" :class="class">
		<label v-if="label != null">{{ label }}</label>
		<select class="ui dropdown fluid search" :class="myClass" :id="dropdown">
			<option value="">{{ placeholder }}</option>
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
			valueSource:	{ required: false, type: String, default: null },
			placeholder:	{ required: false, type: String, default: null }
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
			'generate-dropdown': function () {
				var that = this;
				var allow = that.allowAdd?true:false;
				this.$nextTick(function () {
					$(that.selector).dropdown({allowAdditions:allow});
				});
			},
			'refresh-dropdown': function () {
				var that = this;
				
				if (this.valueSource != null) {
					var ajaxdata = {
						data: {},
						client_action: this.valueSource,
						onsuccess: function (data) {
							if (data.success) {
								that.options = data.data;
							}
							that.$emit('generate-dropdown');
						},
						onerror: function (faildata) {
							that.$emit('generate-dropdown');
						}
					}
					this.$dispatch('ajax-action', ajaxdata);
				} else {
					this.$emit('generate-dropdown');
				}
			}
		},
		ready: function () {
			if (this.values.length > 0) this.options = this.values;
			this.$emit('refresh-dropdown');
		}
	}
</script>