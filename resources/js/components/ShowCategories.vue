<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-3">
                <h1>Categorias </h1>
            </div>
            <div class="col-10 text-center my-3">
                    <strong>Olá, </strong> {{this.model.name}}
                    {{this.model.years_old}}
                    
            </div>
            <div class="col-10 bg-white p-3  rounded border my-3">
                    <div v-for="value in this.info" :key="value.id" class="row align-items-center my-3 px-3">
                        <div class="col-3 rounded">
                            <span style="font-size:1.8em" class="text-primary"> 
                                <i v-bind:class="value.icon"></i>
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="col-12">
                                <strong>{{ value.description }}</strong>
                            </div>
                            <div class="col-12">
                                {{ value.text }}
                            </div>
                        </div>
                        <div class="col-3">
                             <span style="font-size:1.8em" class="text-danger"> 
                                <i class="fas fa-trash-alt"></i>
                            </span>
                        </div>
                    </div>
            </div>
            
        </div>
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
        methods:{
            getCategories: function(){
                 axios
                    .get('/api/categorias')
                    .then(response => (this.info = response.data))
            }
        },
        mounted() {
            axios
                .get('/api/categorias')
                .then(response => (this.info = response.data))
        }
    }
</script>
