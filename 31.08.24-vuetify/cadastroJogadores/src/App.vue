<script>
  export default {
    components: {
      
    },
    data() {
      return {
        jogador:{
          nome:'',
          time:'',
          cpf:'',
        },
        jogadores:[],
        alerta:false,
        alertaTxt:'',
      }
    },
    methods: {
    cadastrarJogador() {
      if(
        !this.validaJogador(this.jogador) &&
        this.validarCPF(this.jogador) &&
        !this.validaTime(this.jogador)
      ){
        this.jogadores.push(this.jogador);
        }
    },
    validaJogador(jogador){
      if(jogador.nome.length < 3){
        this.alerta = true;
        this.alertaTxt = 'Nome inválido';
        return true;
      }
    },
    validaTime(jogador){
      if(jogador.time.length == 3){
        this.alerta = true;
        this.alertaTxt = 'Time inválido';
        return true;
      }
    },
    validarCPF(jogador) {
          let cpf = jogador.cpf.replace(/[^\d]/g, ''); // Remove caracteres não numéricos

          if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) {
              return false; // Verifica se tem 11 dígitos ou se todos os dígitos são iguais
          }

          let soma = 0;
          let resto;

          // Valida o primeiro dígito verificador
          for (let i = 1; i <= 9; i++) {
              soma += parseInt(cpf.substring(i - 1, i)) * (11 - i);
          }
          resto = (soma * 10) % 11;

          if (resto === 10 || resto === 11) {
              resto = 0;
          }
          if (resto !== parseInt(cpf.substring(9, 10))) {
              return false;
          }

          soma = 0;

          // Valida o segundo dígito verificador
          for (let i = 1; i <= 10; i++) {
              soma += parseInt(cpf.substring(i - 1, i)) * (12 - i);
          }
          resto = (soma * 10) % 11;

          if (resto === 10 || resto === 11) {
              resto = 0;
          }
          if (resto !== parseInt(cpf.substring(10, 11))) {
              return false;
          }

          return true;
      },
  }
}
</script>

<template>
  <!--

  - Não deve ser possível cadastrar um jogador sem CPF
  - Não deve ser possível cadastrar um jogador com CPF inválido (pesquise uma função de validação de CPF em JS)


  - Não deve ser possível cadastrar mais de 5 pessoas no mesmo time
  
  - Não deve ser possível cadastrar duas pessoas com o mesmo CPF
  
  Após cadastramento do jogador, todos os campos do formulário devem ser limpos
  -->
  <main>
    <div class="">
      
     <h1>Bem-vindo ao gestor da Super Liga</h1>
      
      <div v-if="alerta" class="alert alert-danger" role="alert">
        <strong>OPS</strong>
        <p>
          {{alertaTxt}}
        </p>
      </div>
      
    </div>

    <div>
      <h2>Cadastro de jogadores</h2>
      <form>
        
        <div class="mb-3">
          <label for="time" class="form-label">Nome do time:</label>
          <input type="text" class="form-control" id="time" aria-describedby="time" v-model="jogador.time">
        </div>
        
        <div class="mb-3">
          <label for="jogador" class="form-label">Nome do jogador:</label>
          <input type="text" class="form-control" id="jogador" aria-describedby="jogador" v-model="jogador.nome">
        </div>
        
        <div class="mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control" id="cpf" aria-describedby="cpf" v-model="jogador.cpf">
        </div>
        
        <div @click="cadastrarJogador()" class="btn btn-primary">Cadastrar jogador</div>
        
      </form>
    </div>
    <div>
      <h2>Lista de jogadores</h2>
      <template v-if="jogadores.length==0">
        <div class="alert alert-warning" role="alert">
          <strong>OPS</strong>
          <p>Ainda não há jogadores cadastrados</p>
          </div>
                  </template>
      <template v-else >
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Time</th>
              <th scope="col">CPF</th>
            </tr>
          </thead>
          <tbody>
            <template v-for="jogador in jogadores" :key="jogador.cpf">
              <tr>
                <td>{{jogador.nome}}</td>
                <td>{{jogador.time}}</td>
                <td>{{jogador.cpf}}</td>
              </tr>
            </template>

          </tbody>
        </table>
      </template>
    </div>
  </main>
</template>

<style scoped>
  
</style>
