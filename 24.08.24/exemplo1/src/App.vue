<template>
  <div>
    <h2>{{message}}</h2>
    <br>
    <input type="text" name="nome" id="nome" v-model="alunoin.nome">
    <input type="text" name="cpf" id="cpf" v-model="alunoin.cpf">
    <input type="number" name="idade" id="idade" v-model="alunoin.idade">
    <button v-on:click="saveAluno()">Cadastrar</button>
    <ul>
      <template v-for="aluno of alunos" :key="aluno.cpf">
        <p>{{ aluno.nome }}</p>
        <ul>
          <li>Idade: {{ aluno.idade }}</li>
          <li>CPF: {{ aluno.cpf }}</li>
        </ul>
      </template>
    </ul>
  </div>
</template>

<script>
export default{
  data(){
    return{
      message:"Alunos",
      alunoin: {
        nome:"",
        idade:"",
        cpf:0
      },
      alunos:[]
    }
  },
  methods:{
    saveAluno(){

      this.cleanSpaceTrim(this.alunoin.nome);
      this.cleanSpaceTrim(this.alunoin.cpf);

     

      if(this.validado(this.alunoin)){
        this.alunos.push(this.alunoin);
      }
  
    },
    validado(aluno){

      if (
        !this.stringIsEmpty(aluno.nome) && 
        !this.stringIsEmpty(aluno.cpf) &&
        this.cpfOk(aluno.cpf) &&
        this.idadeOk(aluno.idade)
      ){
        return true;
      }
    },
    cpfOk(cpf){
      if(cpf.length != 14){
        alert('cpf deve ter 14 caracteres')
      }
      return cpf.length === 14;
    }, 
    idadeOk(idade){
      if(cpf.idade < 0){
        alert('idade não pode ser menor que 0')
      }
      return idade >=0;
    },
    stringIsEmpty(string){
      if(string===""){
        alert('Não pode em branco');
        return true;
      }
    },
    stringIsLassthe3(string){
      if(string.length < 3){
        alert('Não pode menor que 3');
        return true;
      }
    },
    numberIsLassthe0(number){
      if(number < 0){
        alert('Não pode idade menor que 0');
        return true;
      }
    },
    cleanSpaceTrim(string){
        return string.trim();
    },
  }
}
</script>
