<style>
	.ui.modal.form-modal {
		border-radius: 0;
	}
	.ui.grid > form.no-style {
		padding:0;
	}
	.form-modal .sortable.grid li .extra.content {
		display: none;
	}
	.form-modal .sortable.grid li .dimm {
		top: 0px;
	}
</style>

<template>
	<div class="ui long fullscreen modal form-modal" :id="id_modal">
		<div class="header">
			{{ title }}
			<div class="ui small icon buttons right floated">
				<button class="ui green button" @click="triggerUpload"><i class="icon upload"></i></button>
				<button class="ui primary button" @click="mediaSubmit"><i class="icon checkmark"></i></button>
				<button class="ui red button" @click="mediaClose"><i class="icon remove"></i></button>
			</div>
		</div>
		<div class="content" style="min-height:350px;">
			<form method="post" class="no-style form-admin" :id="id">
				<vue-grid
				:maps="{id: 'image', title:'page', image:'image'}"
				:can-edit="false"
				:can-delete="false"
				:can-detail="false"></vue-grid>
				<vue-upload
				name="modal-form-upload"
				:multiple="true"
				:hidden="true"></vue-upload>
				<vue-progress :name="name" :hidden="true"></vue-progress>
			</form>
		</div>
	</div>
</template>

<script>
	module.exports = {
		props: {
			name:			{ required: true, type:String },
			title:			{ required:false, type:String, default:'Media Manager'},
			formAction:		{ required: false, type:Object, default:function () {return {};} },
			formTargetSet:	{ required:true, type:String },
			optionalParam:	{ required:false, type:Object, default:function () {return {};} }
		},
		computed: {
			id: function () {
				return 'form-' + this.name;
			},
			id_modal: function () {
				return this.id + '-modal';
			},
			selector: function () {
				return '#' + this.id;
			},
			selector_modal: function () {
				return '#' + this.id_modal;
			}
		},
		methods: {
			mediaSubmit: function () {
				this.$emit('media-submit');
			},
			mediaClose: function () {
				this.$emit('media-close');
			},
			triggerUpload: function() {
				this.$broadcast('browse-upload','modal-form-upload');
			},
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
			}
		},
		events: {
			'media-submit' : function () {
				this.$dispatch('form-submit', this.getFormValues(), this.formTargetSet);
				this.$emit('media-close');
			},
			'media-close': function () {
				$(this.selector_modal).modal('hide');
			},
			'form-new': function (name) {
				if (this.name == name) {
					this.$broadcast('row-clear');
					$(this.selector_modal).modal({observeChanges:true}).modal('show');
				}
			},
			'upload-progress': function (info) {
				if (info.event == 'progress-set') {
					this.$broadcast('progress-set', this.name, info.progress);
				} else {
					this.$broadcast(info.event, this.name);
				}
			},
			'upload-complete': function () {
				var values = this.getFormValues();
				var newval = [];
				$.each(values['modal-form-upload'], function(index, item) {
					newval.push({id:index, image: item, page: 'Page ' + (index+1) });
				});
				this.$broadcast('row-flash', newval, true);
			}
		},
		ready: function () {}
	}
</script>