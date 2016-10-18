<template>
	<vue-select 
		:options="options"
		label="name"
		:value.sync=value
	>
	</vue-select>
</template>


<script type="text/babel">
	import VueSelect from 'vue-select/src/components/Select.vue';
	export default {
		mixins: ['vue-select'],
		props: {
			user_id: null
		},

		data() {
			return {
				options: null,
				value: null
			}
		},

		methods: {
			getOptions(search,loading) {
				loading(true);
				this.$http.get('/api/users/names').then(resp => {
					this.options = resp.data;
					loading(false);
				});

			}
		},
		ready() {
			this.$http.get('/api/users/names').then(resp => {
				this.options = resp.data;
				this.value = this.user_id;
			});
		}
	}
</script>
