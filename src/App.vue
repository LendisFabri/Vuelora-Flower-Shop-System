<template>
  <v-app>
    <vuelora-header>

    </vuelora-header>

    <vuelora-sidebar>
      
    </vuelora-sidebar>

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
  import VueLoraHeader from '@/components/VueLoraHeader.vue'
  import VueLoraFooter from '@/components/VueLoraFooter.vue'
  import VueLoraSidebar from '@/components/VueLoraSidebar.vue'
  export default{
    name:'App',
    components: {
      VueLoraHeader,
      VueLoraFooter,
      VueLoraSidebar
    },
  }
</script>