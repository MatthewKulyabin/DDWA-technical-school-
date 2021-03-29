// const app = Vue.createApp({
// 	data() {
// 		return {
// 			message: 'Hi, Vue',
// 			title: '',
// 			list: ['First element', 'Second element', 'Third element'],
// 		};
// 	},
// 	methods: {
// 		log(item) {
// 			console.log(item);
// 		},
// 		addToList(title) {
// 			this.list.push(title);
// 			this.title = '';
// 		},
// 	},
// });

// app.component('new-component', {
// 	data() {
// 		return {
// 			count: 0,
// 		};
// 	},
// 	props: ['title'],
// 	template: `
// 		<h4>{{ title }}</h4>
// 	`,
// });

// app.mount('#app');

const app = Vue.createApp({});

app.component('laba-1', {
	data() {
		return {
			usernameText: '',
			username: '',
			purchaseText: '',
			purchaseList: [],
		};
	},
	methods: {
		changeUsername(text) {
			this.username = text;
			this.usernameText = ''
		},
		addToPurchaseList(text) {
			let addFlag = true;
			this.purchaseList.forEach(item => {
				if (item.text === text) {
					addFlag = false;
				}
			});
			text && addFlag && this.purchaseList.push({crossed: false, text});
			this.purchaseList.forEach(item => {});
			this.purchaseText = '';
		},
		removeFromPurchaseList(index) {
			this.purchaseList.splice(index, 1);
		},
	},
	template: `
		<input 
			type="text"
			placeholder="Enter Username"
			v-model="usernameText"
			@keyup.enter="changeUsername(usernameText)"
		/>
		<button @click="changeUsername(usernameText)">Save</button>
		<br /><br />
		<div v-if="username">
			<span>Your username is "{{this.username}}"</span>
			<br /><br />
			<div>
				<input
					type="text"
					placeholder="Enter a purchase"
					v-model="purchaseText"
					@keyup.enter="addToPurchaseList(purchaseText)"
				/>
				<button @click="addToPurchaseList(purchaseText)">Save</button>
				<br />
				<ul>
					<li 
						v-for="(item, i) in purchaseList"
					>
					<span
						:class="item.crossed ? 'line_through' : ''"
						@click="item.crossed = !item.crossed"
					>{{item.text}}</span> <button @click="removeFromPurchaseList(i)">Delete</button></li>
				</ul>
			</div>
		</div>
	`,
});

app.mount('#app');
