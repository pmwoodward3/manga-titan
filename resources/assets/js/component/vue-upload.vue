<template>
	<div class="field">
		<label>{{label}}</label>
		<img src="/manga/image/thumb/dummy.png" class="ui image">
		<button class="ui labeled small icon button" @click="showBrowse"><i class="icon upload"></i> Upload</button>
		<input type="file" :accept="accept" :id="id" style="display:none;">
		<vue-progress :name="name"></vue-progress>
		<div v-if="multiple">
			<input :name="name + '[]'" type="hidden" :value="value" v-for="val in valueArr">
		</div>
		<div v-else>
			<input :name="name" type="hidden" :value="value">
		</div>
	</div>
</template>

<script>
	module.exports = {
		props: {
			name:			{ required: true, type: String },
			label:			{ required: false, type: String, default: null },
			defaultValue:	{ required: false, type: String, default: null },
			multiple:		{ required: false, type: Boolean, default: false },
			accept:			{ required: false, type: String, default: 'image/*' },
			showPreview:	{ required: false, type: Boolean, default: false },
		},
		computed: {
			id: function () {
				return this.name + '-file';
			},
			selector: function () {
				return '#' + this.id;
			}
		},
		data: function () {
			return {
				valueArr: [],
				value: null,
				current: 0,
				success: 0,
				error: 0,
				tmpFile: []
			}
		},
		methods: {
			showBrowse: function () {
				$(this.selector).trigger('click');
			},
			uploadExec: function (file) {
				var that = this;
				this.$http.post('/manga/upload/image',file.data,{
					upload:file.upload
				}).then(function (response) {
					if (response.data.success) {
						file.onsuccess && file.onsuccess(response.data);
					} else {
						file.onerror && file.onerror();
					}
					file.oncomplete && file.oncomplete();
				}, function () {
					file.onerror && file.onerror();
					file.oncomplete && file.oncomplete();
				});
			},
			uploadFile: function () {
				var that = this;
				var formData = new FormData;
				var data = {};
				formData.append('image', this.tmpFile[this.current]);
				if (this.current == this.tmpFile.length) this.uploadFinish();
				if (this.multiple) {
					data = {
						data:formData,
						upload: {},
						onsuccess: function (response) {
							that.success++;
							that.valueArr.push(response.data.filename);
						},
						onerror: function () {
							that.error++;
						},
						oncomplete: function () {
							that.current++;
							that.$broadcast('progress-value', that.name, (that.current / that.tmpFile.length * 100));
							that.uploadFile();
						}
					}
				} else {
					data = {
						data: formData,
						upload: {
							onload: function (e) {
								that.uploadFinish();
							},
							onprogress: function (e) {
								var val = e.loaded/e.total * 100;
								that.$broadcast('progress-set', that.name ,val);
							}
						},
						onsuccess: function (response) {
							that.value = response.data.filename;
						},
						onerror: function () {
							that.error++;
						},
						oncomplete: function () {}
					}
				}
				this.uploadExec(data);
			},
			uploadStart: function (event) {
				this.tmpFile = event.currentTarget.files;

				this.valueArr = [];
				this.value = null;
				this.current = 0;
				this.success = 0;
				this.error = 0;

				this.$broadcast('progress-show', this.name);
				this.$broadcast('progress-reset', this.name);
				this.uploadFile();
			},
			uploadFinish: function () {
				this.$broadcast('progress-complete', this.name);
				this.$broadcast('progress-hide', this.name);
				if (this.errorfile > 0) {
					var notify = {title: 'Upload Failed', text: '', type:'error'};
					notify.text = this.error + ' of ' + this.tmpFile.length + ' files error while upload';
					this.$dispatch('app-notify', notify);
				}
				this.tmpFile = [];
			}
		},
		events: {
			'flash-field': function (data) {
				//
			},
			'clear-field': function () {
				//
			}
		},
		ready: function () {
			var that = this;
			$(this.selector).on('change', function (event) {
				that.uploadStart(event);
			});
			this.$broadcast('progress-hide', this.name);
		}
	}
</script>