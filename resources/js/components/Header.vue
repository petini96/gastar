<template>
    <div class="container ">
        <div class="row align-items-center justify-content-arround text-white bg-primary p-3">
            <div class="col-3 ">
                <img :src="this.logo"  >
            </div>
            <div class="col-4">
                <a ><h5>Registrar</h5></a>
            </div>
            <div class="col-4">
                <a ><h5>Inserir</h5></a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            logo: '/logos/logo.svg'
        }
    }
}
</script>