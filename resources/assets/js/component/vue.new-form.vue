<style>
	.expand-transition {
	  transition: all .3s ease;
	}

	.expand-enter, .expand-leave {
	  opacity: 0;
	}
</style>

<template>
	<form
	:id="id"
	v-show="!isHidden"
	transition="expand"
	class="ui form"
	v-on:submit="submit"
	method="post"
	:action="action"
	>
		<slot></slot>
		<input type="hidden" :name="item.name" :value="item.value" v-for="item in params">
	</form>
</template>

<script>
	module.exports = {
		props: {
			name: 			{ required: true, type: String },
			action: 		{ required: false, type: String, default: null },
			params:			{ required: false, type: Array, default: function () {return [];} },
			hidden:			{ required: false, type: Boolean, default: false },
			resetOnSave:	{ required: false, type: Boolean, default: false },
			hideOnSave:		{ required: false, type: Boolean, default: true },
			preventSubmit:	{ required: false, type: Boolean, default: true },
			actionRefresh:	{ required: false, type: String, default: null },
			actionSave:		{ required: false, type: String, default: null },
			actionDelete:	{ required: false, type: String, default: null },
			targetAdd:		{ required: false, type: String, default: null },
			targetEdit:		{ required: false, type: String, default: null }
		},
		computed: {
			selector: function () {
				return '#' + this.id;
			},
			id: function () {
				return this.name + '-form';
			}
		},
		data: function () {
			return {
				isHidden: false
			}
		},
		methods: {
			getFormValues: function () {
				var submitdata = $(this.selector).serializeArray();
				var objectsubmit = {};
				$.each(submitdata, function (index, item) {
					if (item.name.endsWith("[]") && ! (item.name.replace('[]','') in objectsubmit))
						objectsubmit[item.name.replace('[]','')] = [];
					if (item.name.endsWith("[]")) 
						objectsubmit[item.name.replace('[]','')].push(item.value);
					else 
						objectsubmit[item.name] = item.value;
				});

				return objectsubmit;
			},
			submit: function (event) {
				if (this.preventSubmit) event.preventDefault();
				this.$emit('form-submit');
			}
		},
		events: {
			'form-submit-callback': function (data) {
				if (data.success) {
					var notify = {title: 'Save Success', text: data.message};
					this.$dispatch('app-notify', notify);
					this.$dispatch('form-refresh');
					if (this.resetOnSave) this.$emit('form-reset');
					if (this.hideOnSave) this.$emit('form-hide');
				} else {
					var notify = {title: 'Save Failed', text: data.message, type:'error'};
					this.$dispatch('app-notify', notify);
				}
			},
			'form-delete-callback': function () {
				//
			},
			'form-refresh-callback': function () {
				this.$broadcast('row-flash', data);
			},
			//////////////////////////////////////
			'form-refresh': function () {
				//
			},
			'form-submit': function (newparam, name) {
				if (this.actionSave == null) return;

				var that = this;
				var objectsubmit = this.getFormValues();
				if (typeof name != 'undefined' && typeof newparam != 'undefined' && this.name == name)
					objectsubmit = $.extend({},objectsubmit, newparam);

				var data = {
					data: objectsubmit,
					client_action: this.actionSave,
					onsuccess: function (data) {
						that.$emit('form-submit-callback', data);
					},
					onerror: function (faildata) {}
				};

				this.$dispatch('ajax-action', data);
			},
			'form-reset': function () {
				//
			},
			'form-show': function () {
				this.isHidden = false;
			},
			'form-hide': function () {
				this.isHidden = true;
			},
			/////////////////////////////////
			'form-new': function () {
				//
			},
			'form-edit': function () {
				//
			},
			'form-detail': function () {
				//
			},
			'form-close': function () {
				//
			},
			////////////////////////////////////
			'row-detail': function () {
				//
			},
			'row-edit': function () {
				//
			},
			'row-delete': function () {
				//
			},
			////////////////////////////////////
			'page-changed': function () {
				//
			}
		},
		ready: function () {
			this.isHidden = this.hidden;
			this.$emit('form-refresh');
		}
	}
</script>