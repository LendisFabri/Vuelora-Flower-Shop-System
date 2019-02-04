<template>
  <v-app>
    <vuelora-header>

    </vuelora-header>

    <vuelora-side-bar>
      
    </vuelora-side-bar>

    <v-content>
      <v-slide-y-transition mode="out-in">
        <router-view></router-view>
      </v-slide-y-transition>
    </v-content>

    <vuelora-footer>
      
    </vuelora-footer>

  </v-app>
</template>

<script>
  import VueloraHeader from '@/components/VueloraHeader.vue'
  import VueloraFooter from '@/components/VueloraFooter.vue'
  import VueloraSideBar from '@/components/VueloraSideBar.vue'
  export default{
    name:'App',
    components: {
      VueloraHeader,
      VueloraFooter,
      VueloraSideBar
    },
  }
</script>