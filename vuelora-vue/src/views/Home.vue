<template>
	<div>
		<!-- Bagian pertama yaitu Category -->
		<v-container grid-list-md>
			<v-subheader>
				Random Category
				<v-spacer></v-spacer>
				<!-- link ke route categories yang nantinya akan kita definisikan routing dan componentnya -->
				<router-link to="/categories">See All</router-link>
			</v-subheader>
			<v-layout row wrap>
				<!-- variabel categories ini nanti akan kita isi dengan data dari endpoint category -->
				<v-flex v-for="category in categories" xs6 :key="category.id">
					<v-card :to="'/category/'+ category.slug">
						<!-- untuk load image supaya lebih rapi akan kita buatkan method getImage -->
						<v-card-media
						:src="getImage('/categories/'+category.image)"
						height="150px"
						>
						<v-container fill-height fluid pa-2>
							<v-layout fill-height>
								<v-flex xs12 align-end flexbox>
									<!-- nama category-nya akan ditampilkan di sini -->
									<span class="title white--text text-block" v-
									text="category.name"></span>
								</v-flex>
							</v-layout>
						</v-container>
					</v-card-media>
					<!-- icon dummy saja, nantinya kamu bisa sesuaikan -->
					<v-card-actions>
						<v-spacer></v-spacer>
						<v-btn icon>
							<v-icon>favorite</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>bookmark</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>share</v-icon>
						</v-btn>
					</v-card-actions>
				</v-card>
			</v-flex>
		</v-layout>
	</v-container>
	<!-- Bagian kedua yaitu Flower -->
	<v-container grid-list-md>
		<v-subheader>
			Top Flowers
			<v-spacer></v-spacer>
<!-- link ke route flowers yang nantinya akan kita definisikan routing
	dan componentnya -->
	<router-link to="/flowers">See All</router-link>
</v-subheader>
<v-layout row wrap>
	<!-- data buku kita tampilkan dalam dua kolom (xs6) -->
	<v-flex
	v-for="(flower, index) in flowers" xs6 :key="index">
	<v-card :to="'/flower/'+ flower.slug">
		<v-card-media
		:src="getImage('/flowers/'+flower.cover)"
		height="150px"
		>
		<v-container fill-height fluid pa-2>
			<v-layout fill-height>
				<v-flex xs12 align-end flexbox>
					<span class="title white--text text-block" v-text="flower.title"></span>
				</v-flex>
			</v-layout>
		</v-container>
	</v-card-media>
	<v-card-actions>
		<v-spacer></v-spacer>
		<v-btn icon>
			<v-icon>favorite</v-icon>
		</v-btn>
		<v-btn icon>
			<v-icon>bookmark</v-icon>
		</v-btn>
		<v-btn icon>
			<v-icon>share</v-icon>
		</v-btn>
	</v-card-actions>
</v-card>
</v-flex>
</v-layout>
</v-container>
</div>
</template>
<style scoped>
/* mengatur posisi judul */
.text-block {
	position: absolute;
	bottom: 5px;
	left: 5px;
	background-color: black;
	padding-left: 5px;
	padding-right: 5px;
	opacity: 0.7;
	width:100%;
}
</style>

<script>
	import App from '../App.vue'

	export default {
		components: {
			App
		}
	}
</script>
