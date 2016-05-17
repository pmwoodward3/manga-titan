<template>
<!-- <div class="ui secondary segment form-title">
	<div class="title"><i class="icon" :class="icon"></i> {{ title }}</div>
	<div class="control">
		<div class="ui small icon buttons">
			<slot name="left"></slot>
			<button type="button" v-if="buttonAdd" class="ui blue button" @click="addClick"><i class="icon plus"></i></button>
			<button type="button" v-if="buttonRefresh" class="ui blue button" @click="refreshClick"><i class="icon refresh"></i></button>
			<button type="button" v-if="buttonSave" class="ui blue button" @click="saveClick"><i class="icon save"></i></button>
			<button type="button" v-if="buttonDelete" class="ui red button" @click="deleteClick"><i class="icon trash"></i></button>
			<button type="button" v-if="buttonCancel" class="ui red button" @click="cancelClick"><i class="icon share"></i></button>
			<slot name="right"></slot>
		</div>
	</div>
</div> -->
<div class="title active">
	<div class="caption"><i class="icon" :class="icon"></i><span>{{ title }}</span></div>
	<div class="action"><button class="ui basic button">Action</button></div>
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
			icon: { required: false, type:String, default: null }
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