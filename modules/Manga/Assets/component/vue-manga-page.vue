<style>
	#image-load {
		margin-left:auto;
		margin-right: auto;
		border: 1px solid rgba(0,0,0,0.3);
	}
</style>

<template>
	<div id="context" style="margin-top:56px;">
		<img :src="src" class="ui image" v-on:error="imageError" id="image-load">
	</div>
</template>

<script type="text/javascript">
	module.exports = {
		data: function () {
			return {
				pages: [],
				page_index: 0,
				has_error: false
			};
		},
		computed: {
			src: function () {
				if (this.pages[this.page_index] == '' || this.has_error || this.pages.length == 0)
					return '/manga/image/thumb/dummy.png';

				return '/manga/image/read/' + this.pages[this.page_index];
			}
		},
		methods: {
			imageError: function (e) {
				this.has_error = true;
			}
		},
		events: {
			'row-flash': function (pages) {
				this.pages = pages;
				this.page_index = 0;
			},
			'change-page': function (page) {
				var index = page - 1;
				this.has_error = false;

				if (this.page_index < index) {
					$("html, body").animate({ scrollTop: 80 }, "fast");
				} else if (this.page_index > index) {
					$("html, body").animate({ scrollTop: $('#image-load').height() - 549 }, "fast");
				}

				this.page_index = page - 1;
			}
		},
		ready: function () {}
	}
</script>