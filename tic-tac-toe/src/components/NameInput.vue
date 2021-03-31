<template>
	<div>
		<input
			type="text"
			v-model="usernameText"
			@keydown.enter="saveUsername(usernameText)"
		/>
	</div>
</template>

<script>
	export default {
		name: 'NameInput',
		emits: ['name'],
		data() {
			return {
				usernameText: '',
			};
		},
		methods: {
			saveUsername(text) {
				if (text) {
					this.$emit('name', this.usernameText);
					this.usernameText = '';
				}
			}
		},
	}
</script>
