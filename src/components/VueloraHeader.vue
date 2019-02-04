<template>
  <v-toolbar dark color="pink darken-1">
    
    <v-toolbar-side-icon @click="setSideBar(!sideBar)"></v-toolbar-side-icon>

    <v-toolbar-title class="white-text">VueLora</v-toolbar-title>

    <v-spacer></v-spacer>

    <v-btn icon>
      <v-badge left overlap color="pink darken-2">
        <span slot="badge">1</span>
        <v-icon>shopping_cart</v-icon>
      </v-badge>
    </v-btn>

    <v-text-field
      slot="extension"
      color="white"
      hide-details
      flat
      label="Temukan bunga favoritmu"
      prepend-inner-icon="search"
      solo-interved
    ></v-text-field>
  </v-toolbar>
</template>

<script>
  import {mapGetters, mapActions} from 'vuex'
  export default{
    name:'vuelora-header',
    methods:{
      ...mapActions({
          setSideBar:'setSideBar',
      }),
    },
    computed:{
      ...mapGetters({
          sideBar:'sideBar',
      }),
    }
  }
</script>