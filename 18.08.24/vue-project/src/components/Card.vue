<template>

    <div class="card" :class="cor">
        <h1>{{ texto }}</h1>
    </div>
    
</template>

<script>

export default {
    props: {
        texto: String,
        cor: String
    },
    data() {
        return {

        }
    }
}

</script>

<style scoped>

.card {
    padding: 30px;
    background-color: aliceblue;
    border-radius: 10px;
    color: #666;
}

.verde {
    color: green;
}

</style>