<template>
	<div class="ui vertical menus"></div>
</template>

<script>
	module.exports = {
		props: {
			id: 		{ required: false, type: String, default: 'id' },
			maps: 		{ required: true, type: Object },
			canDelete: 	{ required: false, type: Boolean, default: true },
			canEdit: 	{ required: false, type: Boolean, default: true },
			canDetail: 	{ required: false, type: Boolean, default: true },
		},
		computed: {
			namecheck: function () {
				return this.id + '[]';
			}
		},
		data: function () {
			return {
				items: [],
				checks: []
			}
		},
		events: {
			'row-flash': function (data, selectall) {
				if (typeof data != 'undefined') {
					this.items = data;
					this.checks = [];
					if (selectall) this.select_all = true;
				}
			},
			'row-clear': function () {
				this.checks = [];
				this.items = [];
			}
		}
	}
</script>