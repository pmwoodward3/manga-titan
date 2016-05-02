<template>
	<div class="ui list"></div>
</template>

<script>
	module.exports = {
		props: {
			maps:	{ required: true, type: Array }
		},
		data: function () {
			return {
				items: []
			}
		},
		events: {
			'row-flash': function (data) {
				this.items = data;
			}
		},
		ready: function () {
			//
		}
	}
</script>