<template>
  <v-app>
    <app-navigation />
    <v-main class="grey lighten-3">
      <v-container>
        <v-row>
          <v-col>
            <router-view />
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import AppNavigation from "@/components/AppNavigation.vue";

export default {
  name: "App",

  components: {
    AppNavigation
  },

  data: () => ({
    //
  })
};
</script>
