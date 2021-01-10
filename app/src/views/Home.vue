<template>
  <v-card>
    <v-card-title><h1>{{ $tc("views.home.welcome") }}</h1></v-card-title>
  </v-card>
</template>

<script lang="ts">
import {Component, Vue} from "vue-property-decorator";

@Component({
  components: {}
})
export default class Home extends Vue {
}
</script>
