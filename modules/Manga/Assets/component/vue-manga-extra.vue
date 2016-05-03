<template>
	{{dataRow.views}}
	<i class="icon unhide"></i>
	{{dataRow.page}}
	<i class="icon file"></i>
</template>

<script>
	module.exports = {
		props: {
			dataRow: 	{ required: true, type: Object }
		}
	}
</script>