<template>
  <v-app-bar app color="teal" dark>
    <v-toolbar-items>
      <v-overflow-btn
        hide-details
        flat
        class="align-self-center"
        :label="$tc('components.appNavigation.kursquali')"
      />
      <v-btn text>
        <v-icon left>mdi-eye</v-icon>
        {{ $tc("components.appNavigation.observations") }}
      </v-btn>
      <v-btn text>
        <v-icon left>mdi-account-group</v-icon>
        {{ $tc("components.appNavigation.groups") }}
      </v-btn>
      <v-btn text>
        <v-icon left>mdi-calendar</v-icon>
        {{ $tc("components.appNavigation.program") }}
      </v-btn>
      <v-btn text>
        <v-icon left>mdi-account</v-icon>
        {{ $tc("components.appNavigation.participants") }}
      </v-btn>
      <v-btn text>
        <v-icon left>mdi-seal-variant</v-icon>
        {{ $tc("components.appNavigation.qualification") }}
      </v-btn>
    </v-toolbar-items>
    <v-spacer />
    <v-app-bar-nav-icon></v-app-bar-nav-icon>
  </v-app-bar>
</template>
<script lang="ts">
export default {
  name: "app-navigation"
};
</script>
