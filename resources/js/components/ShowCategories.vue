<template>
    <div class="container">
        <h1>Listagem de categorias </h1>
        {{this.model.name}}
        {{this.model.years_old}}
        <!-- {{this.user.years_old}} -->
        <ul id="v-for-object" class="demo" >
            <li v-for="value in this.info" :key="value.id">
                {{ value.description }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['model'],
        data(){
            return {
                info: ''
            }
            
        },
        mounted() {
            axios
                .get('/api/categorias')
                .then(response => (this.info = response.data))
        }
    }
</script>
