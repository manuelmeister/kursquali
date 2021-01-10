<template>
  <v-app>
    <app-navigation/>

    <v-main>
      <HelloWorld />
    </v-main>
  </v-app>
</template>

<script lang="ts">
import Vue from "vue";
import HelloWorld from "./components/HelloWorld.vue";
import AppNavigation from "@/components/AppNavigation.vue";

export default Vue.extend({
  name: "App",

  components: {
    AppNavigation,
    HelloWorld
  },

  data: () => ({
    //
  })
});
</script>
