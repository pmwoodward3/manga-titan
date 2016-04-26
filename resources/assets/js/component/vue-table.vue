<template>
	<table class="ui table" :class="class">
		<thead v-if="withHeader">
			<tr>
				<th v-for="item in maps" v-text="item.name"></th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="row in rows">
				<td v-for="col in maps" v-text="row[col.key]"></td>
			</tr>
		</tbody>
	</table>
</template>

<script>
	module.exports = {
		props: {
			class: {
				required: false,
				type: Array,
				default: function () {return [];}
			},
			maps: {
				required: true,
				type: Array
			},
			withHeader: {
				required: false,
				type: Boolean,
				default: true
			}
		},
		data: function () {
			return {
				rows: []
			}
		},
		events: {
			'row-flash': function (data) {
				this.rows = data;
			}
		}
	}
</script>