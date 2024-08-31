<template>
    <v-card class="mx-auto" max-width="960">
      <v-layout>
        <v-app-bar color="primary" density="compact">
          <v-app-bar-title>Cadastre o seu time</v-app-bar-title>
        </v-app-bar>
  
        <v-main>
          <v-container fluid>
            
            <v-form ref="form" v-model="valid">
              <v-container>
                <v-row>
                  <v-col
                    cols="12"
                  >
                    <v-text-field
                      v-model="player.name"
                      :counter="10"
                      :rules="nameRules"
                      label="nome do jogadoer"
                      required
                    ></v-text-field>
                  </v-col>
  
                  <v-col
                    cols="12"
                    md="4"
                  >
                    <v-text-field
                      v-model="player.team"
                      :counter="10"
                      :rules="teamRules"
                      label="Time"
                      required
                    ></v-text-field>
                  </v-col>
  
                  <v-col
                    cols="12"
                    md="4"
                  >
                    <v-text-field
                      v-model="player.cpf"
                      
                      :rules="cpfRules"
                      label="CPF"
                      required
                    ></v-text-field>
                  </v-col>

                  <v-btn
                    :loading="loading"
                    class="mt-2"
                    text="Cadastar Jogador"
                    type="submit"
                    block
                    @click="savePlayer()"
                ></v-btn>

                </v-row>
              </v-container>
            </v-form>
            
          </v-container>
        </v-main>
      </v-layout>
    </v-card>
  </template>

<script>
export default {
  data: () => ({
    valid: false,
    player: {name:'', team:'', cpf:''},
    nameRules: [
      value => {
        if (value) return true

        return 'O nome é obrigatorio.'
      },
      value => {
        if (value?.trim().length <= 10) return true

        return 'Nome deve ter no maximo 10 caracteres.'
      },
    ],
    teamRules: [
      value => {
        if (value.trim()) return true

        return 'O nome do time é obrigatorio.'
      },
      value => {
        if (value?.length <= 5) return true

        return 'O time deve ter ao menos 5 caracteres.'
      },
    ],
    cpfRules: [
        value => {
          if (value.trim()) return true

          return 'Você esqueceu de informar o CPF.'
        },
        value => {
          const strCPF = value
          let isValid = true

          var sum;
          var rest;
          sum = 0;
          if (strCPF == "00000000000") isValid = false;

          for (let i=1; i<=9; i++) sum = sum + parseInt(strCPF.substring(i-1, i)) * (11 - i);
          rest = (sum * 10) % 11;

          if ((rest == 10) || (rest == 11))  rest = 0;
          if (rest != parseInt(strCPF.substring(9, 10)) ) isValid = false;

          sum = 0;
          for (let i = 1; i <= 10; i++) sum = sum + parseInt(strCPF.substring(i-1, i)) * (12 - i);
          rest = (sum * 10) % 11;

          if ((rest == 10) || (rest == 11))  rest = 0;
          if (rest != parseInt(strCPF.substring(10, 11) ) ) isValid = false;

          if (isValid) {
            return true;
          }

          return 'O CPF informado não parece ser válido!'
        }
      ],
  }),
  methods: {
    savePlayer(){
        alert('salvou')
        this.$refs.form.reset()
        this.$refs.form.resetValidation()
    }
},
}
</script>