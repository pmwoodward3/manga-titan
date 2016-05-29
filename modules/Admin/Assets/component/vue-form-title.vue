<template>
<div class="title active">
	<div class="caption"><i class="icon" :class="icon" v-if="icon != null"></i><span>{{ title }}</span></div>
	<div class="ui action buttons">
		<vue-page v-if="page"></vue-page>
		<slot name="left"></slot>
		<a class="ui icon very basic button" v-if="buttonAdd" @click="addClick"><i class="icon plus"></i></a>
		<a class="ui icon very basic button" v-if="buttonRefresh" @click="refreshClick"><i class="icon refresh"></i></a>
		<a class="ui icon very basic button" v-if="buttonSave" @click="saveClick"><i class="icon save"></i></a>
		<a class="ui icon very basic button" v-if="buttonDelete" @click="deleteClick"><i class="icon trash"></i></a>
		<a class="ui icon very basic button" v-if="buttonCancel" @click="cancelClick"><i class="icon share"></i></a>
		<slot name="right"></slot>
	</div>
</div>
</template>

<script type="text/javascript">
	module.exports = {
		props: {
			buttonAdd: { required:false, type:Boolean, default: false },
			buttonDelete: { required:false, type:Boolean, default: false },
			buttonSave: { required:false, type:Boolean, default: false },
			buttonRefresh: { required:false, type:Boolean, default: false },
			buttonCancel: { required:false, type:Boolean, default: false },
			title: { required: true, type:String },
			icon: { required: false, type:String, default: null },
			page: { required: false, type:Boolean, default: true }
		},
		methods: {
			addClick: function () {
				this.$dispatch('form-new');
			},
			deleteClick: function () {
				this.$dispatch('form-delete');
			},
			saveClick: function () {
				this.$dispatch('form-submit');
			},
			refreshClick: function () {
				this.$dispatch('form-refresh');
			},
			cancelClick: function () {
				this.$dispatch('form-hide');
			}
		}
	}
</script>