<template>
  <v-app>
    <app-navigation/>
    <v-main class="grey lighten-3">
      <v-container>
        <v-row>
          <v-col>
            <router-view/>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script lang="ts">
import Vue from "vue";
import AppNavigation from "@/components/AppNavigation.vue";

export default Vue.extend({
  name: "App",

  components: {
    AppNavigation
  },

  data: () => ({
    //
  })
});
</script>
