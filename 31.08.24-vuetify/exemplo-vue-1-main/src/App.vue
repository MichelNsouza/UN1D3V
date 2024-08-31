<template>
  <v-card variant="flat">
    <v-layout>
      <v-app-bar
        color="primary"
        density="compact"
      >
        <template v-slot:prepend>
          <v-app-bar-nav-icon></v-app-bar-nav-icon>
        </template>

        <v-app-bar-title><Strong>UN1D3V</Strong>Team Manager</v-app-bar-title>

        
      </v-app-bar>

      <v-main>
        <v-container fluid>
          <v-row dense>
            <v-col cols="12">

              <createPlayer/>

            </v-col>
          </v-row>
        </v-container>
      </v-main>
    </v-layout>
  </v-card>
</template>

<script>
import CreatePlayer from './components/CreatePlayer.vue'

export default {
  components: {
    CreatePlayer
  }
}

</script>