<template>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-10">
                <h1>Alerta meu ovo</h1>
                <form action="">
                    <fieldset>
                        <label for="description"></label>
                        <input type="text" v-model="bodyFormData.description" id="description" class="border rounded w-100 p-2" placeholder="Descrição">
                    </fieldset>

                    <fieldset>
                        <label for="text"></label>
                        <input type="text" v-model="bodyFormData.text" id="text" class="border rounded w-100 p-2" placeholder="Texto">
                    </fieldset>

                    <fieldset>
                        <label for="icon"></label>
                        <input type="text" v-model="bodyFormData.icon" id="icon" class="border rounded w-100 p-2" placeholder="Icone">
                    </fieldset>

                    <button class="btn btn-primary my-3 p-2" v-on:click="store">Enviar</button>
                    <button class="btn btn-danger my-3 p-2">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      message:"",
      bodyFormData: {
        description: "",
        text: "",
        icon: "",
      },
    };
  },
  methods: {
   
    store: function (event) {
        event.preventDefault();
        var bodyFormData = new FormData();
        axios({
            method: "post",
            url: "/api/categorias",
            data: this.bodyFormData,
        })
        .then((response) => {
            console.log(response.data);
                this.bodyFormData.description = "";
                this.bodyFormData.text = "";
                this.bodyFormData.icon = "";
            })
        .catch((error) => {
            this.message = error.response.data.errors;
            console.log(this.message);
        });
        getCategories();
    },
    clean() {
      this.bodyFormData.description = "";
      this.bodyFormData.text = "";
      this.bodyFormData.icon = "";
    },
  },
  mounted() {
  },
};
</script>
