<script>
	module.exports = {
		props: {
			format: { required: false, type: String, default: '{0}' }
		},
		methods: {
			replaceRegex: function (format, data) {
				var target = /\{\w+\}/ig;
				var regexres = format.match(target);
				var ret = format;
				var key = '';
				if (regexres != null) {
					$.each(regexres, function (index, result) {
						key = result.substring(result.length-1,1);
						ret = ret.replace(result, data[key]);
					});
				}
				return ret;
			},
			generateTitle: function (data) {
				this.$dispatch('title-change', this.replaceRegex(this.format, data));
			}
		},
		events: {
			'row-flash': function (data) {
				this.generateTitle(data);
			}
		}
	}
</script>