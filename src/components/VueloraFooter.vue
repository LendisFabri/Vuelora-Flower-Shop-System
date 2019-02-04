<template>
	<v-footer dark height="auto">
		<v-flex xs12>
			<v-card
				flat tile
				class="secondary darken-1 white--text text-xs-center"
			>

				<v-card-text>
					<v-btn
						v-for="icon in icons"
						:key="icon"
						class="mx-3 white--text"
						icon
					>
						<v-icon size="24px">{{icon}}</v-icon>
					</v-btn>
				</v-card-text>

				<v-card-text v-if="" class="white--text pt-0">
					Lorem ipsum sit dolor amet ...
				</v-card-text>

				<v-layout justify-center row wrap>
					<v-btn
						v-for="link in links"
						:key="link"
						color="white"
						flat
						round
					>{{link}}
					</v-btn>

					<v-flex
						secondary
						darken-2
						py-3
						text-xs-center
						white--text
						xs12
					>
					&copy;2019 - VueLora powered by <strong>Laravel and Vue</strong><v-icon>laravel</v-icon>
					</v-flex>
				</v-layout>
			</v-card>
		</v-flex>
	</v-footer> 
</template>

<script>
	export default{
		data:()=>({
			icons:[
				'fab fa-facebook',
				'fab fa-twitter',
				'fab fa-google-plus',
				'fab fa-linkedin',
				'fab fa-instagram'
			],
			links:[
				'Home',
				'About Us',
				'Team',
				'Services',
				'Blog',
				'Contact Us'
			]
		})
	}
</script>