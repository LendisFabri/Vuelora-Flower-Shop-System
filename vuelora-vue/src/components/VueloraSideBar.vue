<template>
	<v-navigation-drawer v-model="drawer" absolute fixed clipped>
		<v-toolbar dark color="pink darken-1">
			<v-btn icon dark @click="drawer=false">
				<v-icon>close</v-icon>
			</v-btn>
			<v-toolbar-title>VueLora</v-toolbar-title>
		</v-toolbar>

		<v-list>
			<v-list-tile>
				<v-btn
					depressed
					block
					round
					color="pink darken-1"
					class="white--text"
				>Register
					<v-icon right dark>person_add</v-icon>
				</v-btn>
			</v-list-tile>
			<v-list-tile>
				<v-btn
					block
					round
					depressed
					color="pink darken-1"
					class="white--text"
				>Login
					<v-icon right dark>lock_open</v-icon>
				</v-btn>
			</v-list-tile>
		</v-list>

		<v-list class="pt-0" dense>
			<v-divider></v-divider>
			<v-list-tile
				v-for="(item, index) in items"
				:key="index"
				:href="item.route"
				:to="{name: item.route}"
			>
				<v-list-tile-action>
					<v-icon>{{item.icon}}</v-icon>
				</v-list-tile-action>

				<v-list-tile-content>
					<v-list-tile-title>{{item.title}}</v-list-tile-title>
				</v-list-tile-content>
			</v-list-tile>
		</v-list>
	</v-navigation-drawer>
</template>
<script>
	import {mapGetters, mapActions} from 'vuex'
	export default{
		name:'vuelora-side-bar',
		data:()=>({
			// drawer:true,
			items:[
				{title:'Home', icon:'dashboard', route:'home'},
				{title:'About', icon:'question_answer', route:'about'}
			]
		}),
		computed:{
			...mapGetters({
				sideBar:'sideBar',
			}),
			drawer:{
				get(){
					return this.sideBar
				},
				set(value){
					this.setSideBar(value)
				}
			},
		},
		methods:{
			...mapActions({
				setSideBar:'setSideBar',
			}),
		},
	}
</script>