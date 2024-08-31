<template>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <Card texto="E ai, blz?" cor="verde" />
        <Card texto="O barato é loko!" />
        
        <h1>Bem-vindo ao {{ nomeDoAplicativo }}</h1><br>
        <div>Você clicou no botão <span :class="backgroundContador">{{ contador }}</span> vez(es)</div><br>
        <button @click="atualizarContador">Clique aqui</button><br>

        <input type="text" v-model="nomeDoAplicativo">
      </div>
    </div>
  </div>

</template>

<script>

import Card from '@/components/Card.vue';

export default {
  components: {
    Card
  },
  data() {
    return {
      nomeDoAplicativo: 'VueTech App',
      contador: 0,
      backgroundContador: 'ok'
    }
  },
  methods: {

    atualizarContador() {
      this.contador++
    }

  },
  watch: {

    contador(newValue, oldValue) {
      if (newValue < 8) {
        this.backgroundContador = 'ok'
      } else {
        this.backgroundContador = 'cuidado'
      }
    }

  }
}

</script>

<style scoped>

.ok {
  background-color: green;
}

.cuidado {
  background-color: red;
}

</style>