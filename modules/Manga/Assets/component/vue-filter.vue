<template>
	<div class="row">
		<div class="sixteen wide column">
			<div class="ui form" v-show="is_hidden" style="margin-bottom:1em;">
				<div class="five fields">
					<div class="field">
						<label>Search</label>
						<input type="text" name="keyword">
					</div>
					<vue-select name="length" label="Length" placeholder="Length" :values="[
						{value:'short', text:'1-20 Pages'},
						{value:'mediun', text:'21-40 Pages'},
						{value:'long', text:'41-100 Pages'},
						{value:'mega', text:'100+ Pages'},
					]"></vue-select>
					<vue-select name="category" label="Category" value-source="source-category" placeholder="Category"></vue-select>
					<vue-select name="tags" label="Tags" value-source="source-tags" :multiple="true" placeholder="Tags"></vue-select>
					<div class="field">
						<label></label>
						<button type="submit" class="ui button">Apply</button>
					</div>
				</div>
			</div>
			<button type="button" class="ui button mini right labeled icon right floated" @click="showFilter"><i class="icon caret down"></i> More Filter</button>
		</div>
	</div>
</template>

<script>
	module.exports = {
		data: function () {
			return {
				manga_length: 12,
				manga_time: null,
				manga_keyword: null,
				manga_tags: [],
				is_hidden: false
			};
		},
		methods: {
			showFilter: function () {
				this.is_hidden = !this.is_hidden;
			}
		},
		events: {
			'filter-changed-call': function () {
				var data = {
					manga_time: this.manga_time,
					manga_length: this.manga_length,
					manga_tags: this.manga_tags,
					manga_keyword: this.manga_keyword
				};
				this.$dispatch('filter-changed', data);
			}
		},
		ready: function () {
			$('.ui.length.dropdown').dropdown();
			$('.ui.recent.dropdown').dropdown();
			$('.ui.tags.dropdown').dropdown();
		}
	};
</script>