<style>
	.ui.link {
		cursor: pointer;
	}
</style>

<template>
	<span class="ui link" @click="rowDelete"><i class="icon trash"></i></span>
</template>

<script>
	module.exports = {
		props: {
			dataRow: { required: true, type: Object }
		},
		methods: {
			rowDelete: function() {
				this.$dispatch('row-delete', this.dataRow);
			}
		}
	}
</script>